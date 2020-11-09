<?php
/*---------------------
Add style sheets and javascript files
---------------------------- */
function custom_theme_scripts(){
  //Bootstrap CSS
  wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');

  //Main CSS
  wp_enqueue_style('main-styles', get_stylesheet_uri());

  //Javascript Files
  wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js' );
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/scripts.js');
}

add_action('wp_enqueue_scripts', 'custom_theme_scripts');

/*---------------------
Adds Featured Images
---------------------------- */
add_theme_support('post-thumbnails');

/*---------------------
Custom Header Image
---------------------------- */
$custom_image_header = array(
  'width'   => 225,
  'height'  => 120,
  'uploads' => true,
);

add_theme_support('custom-header', $custom_image_header);


/*-------------------------------

Post Data information

--------------------------------*/
function post_data(){

    $archive_year   = get_the_time('Y');
    $archive_month  = get_the_time('m');
    $archive_day    = get_the_time('d');
   ?>

   <p>Written by: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <?php echo get_the_author(); ?> </a> | Published on: <a href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>"><?php echo "$archive_month/$archive_day/$archive_year"; ?></a></p>

   <?php
}

/*-------------------------------

Archive Sidebar

--------------------------------*/

function archiveSidebar(){?>

  <aside class="col-lg-3 archive-sidebar">
    <h2>Archives by Category:</h2>

    <ul class="category-list">
      <?php
        wp_list_categories(array(
          "orderby" => "name",
          "show_count" => true,
          "title_li" => "",
        ));
       ?>
     </ul>

      <h2>Archives by Tag:</h2>
      <ul class="tag-list">
        <?php
          $tags = get_tags();

          foreach($tags as $tag ){
            echo '<li><a href="' . get_tag_link($tag->term_id) . '" rel="tag">' . $tag->name . ' (' . $tag->count . ') </a></li>';
          }
         ?>
      </ul>

      <h2>Last 10 Posts:</h2>

      <ul class="recent-posts">
        <?php
          $archive_10 = get_posts('numberposts=10');

          foreach($archive_10 as $post){ ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php  }
        ?>
      </ul>
      <h2>Archives by Month:</h2>

      <ul class="monthly-list">
        <?php
          wp_get_archives(array(
            'type' => 'monthly',
            'show_post_count' => true,
          ));?>
      </ul>
  </aside>

<?php }

/*-------------------------------

Add menus to our theme

--------------------------------*/

function register_my_menus(){
  register_nav_menus(array(
    'main-menu'     => __('Main Menu')
  ));
}

add_action('init', 'register_my_menus');

/*----------------------------

Pagination Links

---------------------------- */

function myPagination(){
  global $wp_query;

  global $wp_query;

  $big = 999999999; // need an unlikely integer
  $translated = __( 'Page', 'mytextdomain' ); // Supply translatable string

  echo paginate_links( array(
      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'format' => '?paged=%#%',
      'current' => max( 1, get_query_var('paged') ),
      'total' => $wp_query->max_num_pages,
          'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>'
  ) );
}

/*----------------------------

Post Navigation

---------------------------- */

function myPostNavigation(){?>
  <div class="post-navigation-container row">
    <div class="previous-post-link col-sm-6">
      <?php previous_post_link(); ?>
    </div>

    <div class="next-post-link col-sm-6">
      <?php next_post_link(); ?>
    </div>
  </div>
<?php }


/*----------------------------

Create Widget Areas

---------------------------- */

function blank_widgets_init(){
  register_sidebar(array(
    'name'          => ('Sidebar'),
    'id'            => 'sidebar',
    'description'   => 'Widget area in sidebar',
    'before_widget' => '<div class="sidebar">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));

  register_sidebar(array(
    'name'          => ('Archive Sidebar'),
    'id'            => 'archive-sidebar',
    'description'   => 'Widget area in archive sidebar',
    'before_widget' => '<div class="archive-sidebar">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));

  register_sidebar(array(
    'name'          => ('Contact Areas'),
    'id'            => 'contact-areas',
    'description'   => 'Widget area with contact info',
    'before_widget' => '<div class="contact-areas">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));

  register_sidebar(array(
    'name'          => ('Left Footer'),
    'id'            => 'left-footer',
    'description'   => 'Widget area in middle of footer'
  ));

  register_sidebar(array(
    'name'          => ('Middle Footer'),
    'id'            => 'middle-footer',
    'description'   => 'Widget area in middle of footer',
    'before_widget' => '<div class="middle-footer">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));

  register_sidebar(array(
    'name'          => ('Right Footer'),
    'id'            => 'right-footer',
    'description'   => 'Widget area in right of footer',
    'before_widget' => '<div class="right-footer">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
}

add_action('widgets_init', 'blank_widgets_init');




/*----------------------------

Register advanced custom fields

---------------------------- */

/*-------------- 
home page 
---------------*/
if(function_exists('acf_add_local_field_group')){

  acf_add_local_field_group(array(
    'key'     => 'section-1',
    'title'   => 'Homepage Section 1',
    'fields'  => array(
      array (
        'key'   => 'section-1-header',
        'label' => 'Section 1 Header',
        'name'  => 'section-1-header',
        'type'  => 'wysiwyg'
      ),
      array (
        'key'   => 'section-1-subheader',
        'label' => 'Section 1 Subheader',
        'name'  => 'section-1-subheader',
        'type'  => 'text'
      ),
      array (
        'key'   => 'section-1-content',
        'label' => 'Section 1 Content',
        'name'  => 'section-1-content',
        'type'  => 'wysiwyg'
      ),

      array (
        'key'   => 'section-1-button',
        'label' => 'Section 1 Button',
        'name'  => 'section-1-button',
        'type'  => 'text'
      ),
    ),

    'location' => array(
      array(
        array(
          'param'     => 'page_template',
          'operator'  => '==',
          'value'     => 'page-home.php'
        ),
      ),
    ),

    'position'  => 'acf_after_title'
  ));

  acf_add_local_field_group(array(
    'key'     => 'section-2',
    'title'   => 'Homepage Section 2',
    'fields'  => array(
      array (
        'key'   => 'section-2',
        'label' => 'Section 2 Content',
        'name'  => 'section-2',
        'type'  => 'wysiwyg'
      ),

      array (
        'key'   => 'section-2-button',
        'label' => 'Section 2 Button',
        'name'  => 'section-2-button',
        'type'  => 'text'
      ),
    ),

    'location' => array(
      array(
        array(
          'param'     => 'page_template',
          'operator'  => '==',
          'value'     => 'page-home.php'
        ),
      ),
    ),

    'position'  => 'acf_after_title'
  ));

  acf_add_local_field_group(array(
    'key'     => 'section-3',
    'title'   => 'Homepage Section 3',
    'fields'  => array(
      array (
        'key'   => 'section-3',
        'label' => 'Section 3 Content',
        'name'  => 'section-3',
        'type'  => 'wysiwyg'
      ),

      array (
        'key'   => 'section-3-button',
        'label' => 'Section 3 Button',
        'name'  => 'section-3-button',
        'type'  => 'text'
      ),
    ),

    'location' => array(
      array(
        array(
          'param'     => 'page_template',
          'operator'  => '==',
          'value'     => 'page-home.php'
        ),
      ),
    ),

    'position'  => 'acf_after_title'
  ));

  acf_add_local_field_group(array(
    'key'     => 'section-4',
    'title'   => 'Homepage Section 4',
    'fields'  => array(
      array (
        'key'   => 'application-step-1',
        'label' => 'Application Step 1',
        'name'  => 'application-step-1',
        'type'  => 'text'
      ),

      array (
        'key'   => 'application-step-2',
        'label' => 'Application Step 2',
        'name'  => 'application-step-2',
        'type'  => 'text'
      ),

      array (
        'key'   => 'application-step-3',
        'label' => 'Application Step 3',
        'name'  => 'application-step-3',
        'type'  => 'text'
      ),

      array (
        'key'   => 'application-step-4',
        'label' => 'Application Step 4',
        'name'  => 'application-step-4',
        'type'  => 'text'
      ),

      array (
        'key'   => 'section-4-button',
        'label' => 'Section 4 Button',
        'name'  => 'section-4-button',
        'type'  => 'text'
      ),
    ),

    'location' => array(
      array(
        array(
          'param'     => 'page_template',
          'operator'  => '==',
          'value'     => 'page-home.php'
        ),
      ),
    ),

    'position'  => 'acf_after_title'
  ));

  acf_add_local_field_group(array(
    'key'     => 'section-5',
    'title'   => 'Homepage Section 5',
    'fields'  => array(
      array (
        'key'   => 'section-5',
        'label' => 'Section 5 Content',
        'name'  => 'section-5',
        'type'  => 'wysiwyg'
      ),

      array (
        'key'   => 'section-5-button',
        'label' => 'Section 5 Button',
        'name'  => 'section-5-button',
        'type'  => 'text'
      ),
    ),

    'location' => array(
      array(
        array(
          'param'     => 'page_template',
          'operator'  => '==',
          'value'     => 'page-home.php'
        ),
      ),
    ),

    'position'  => 'acf_after_title'
  ));

  acf_add_local_field_group(array(
    'key'     => 'section-6',
    'title'   => 'Homepage Section 6',
    'fields'  => array(
      array (
        'key'   => 'section-6',
        'label' => 'Section 6 Content',
        'name'  => 'section-6',
        'type'  => 'wysiwyg'
      ),

      array (
        'key'   => 'section-6-button',
        'label' => 'Section 6 Button',
        'name'  => 'section-6-button',
        'type'  => 'text'
      ),
    ),

    'location' => array(
      array(
        array(
          'param'     => 'page_template',
          'operator'  => '==',
          'value'     => 'page-home.php'
        ),
      ),
    ),

    'position'  => 'acf_after_title'
  ));

  acf_add_local_field_group(array(
    'key'     => 'section-7',
    'title'   => 'Homepage Section 7',
    'fields'  => array(
      array (
        'key'   => 'section-7',
        'label' => 'Section 7 Content',
        'name'  => 'section-7',
        'type'  => 'wysiwyg'
      ),

      array (
        'key'   => 'section-7-button',
        'label' => 'Section 7 Button',
        'name'  => 'section-7-button',
        'type'  => 'text'
      ),
    ),

    'location' => array(
      array(
        array(
          'param'     => 'page_template',
          'operator'  => '==',
          'value'     => 'page-home.php'
        ),
      ),
    ),

    'position'  => 'acf_after_title'
  ));

  acf_add_local_field_group(array(
    'key'     => 'section-8',
    'title'   => 'Homepage Section 8',
    'fields'  => array(
      array (
        'key'   => 'section-8',
        'label' => 'Section 8 Content',
        'name'  => 'section-8',
        'type'  => 'wysiwyg'
      ),

      array (
        'key'   => 'section-8-button',
        'label' => 'Section 8 Button',
        'name'  => 'section-8-button',
        'type'  => 'text'
      ),
    ),

    'location' => array(
      array(
        array(
          'param'     => 'page_template',
          'operator'  => '==',
          'value'     => 'page-home.php'
        ),
      ),
    ),

    'position'  => 'acf_after_title'
  ));

  acf_add_local_field_group(array(
    'key'     => 'section-9',
    'title'   => 'Homepage Section 9',
    'fields'  => array(
      array (
        'key'   => 'section-9',
        'label' => 'Section 9 Content',
        'name'  => 'section-9',
        'type'  => 'wysiwyg'
      ),

      array (
        'key'   => 'section-9-button',
        'label' => 'Section 9 Button',
        'name'  => 'section-9-button',
        'type'  => 'text'
      ),
    ),

    'location' => array(
      array(
        array(
          'param'     => 'page_template',
          'operator'  => '==',
          'value'     => 'page-home.php'
        ),
      ),
    ),

    'position'  => 'acf_after_title'
  ));

  acf_add_local_field_group(array(
    'key'     => 'section-10',
    'title'   => 'Homepage Section 10',
    'fields'  => array(
      array (
        'key'   => 'section-10',
        'label' => 'Section 10 Content',
        'name'  => 'section-10',
        'type'  => 'wysiwyg'
      ),

      array (
        'key'   => 'section-10-button',
        'label' => 'Section 10 Button',
        'name'  => 'section-10-button',
        'type'  => 'text'
      ),
    ),

    'location' => array(
      array(
        array(
          'param'     => 'page_template',
          'operator'  => '==',
          'value'     => 'page-home.php'
        ),
      ),
    ),

    'position'  => 'acf_after_title'
  ));

}