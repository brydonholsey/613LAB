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

}

add_action('widgets_init', 'blank_widgets_init');

/*----------------------------

Register advanced custom fields

---------------------------- */

/*-------------- HOME PAGE ------------------*/
if(function_exists('acf_add_local_field_group')){

  acf_add_local_field_group(array(
    'key'     => 'home-section-1',
    'title'   => 'Homepage Section 1',
    'fields'  => array(
      array (
        'key'   => 'section-1',
        'label' => 'Section 1 Content',
        'name'  => 'section-1',
        'type'  => 'textarea'
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
    'key'     => 'above-footer',
    'title'   => 'Above Footer',
    'fields'  => array(
      array (
        'key'   => 'above-footer-area',
        'label' => 'Field above footer area',
        'name'  => 'above-footer',
        'type'  => 'wysiwyg'
      ),
    ),

    'location' => array(
            // each OR group is an array
            array(
              // if you wanted to add an "AND' rule it would go under here
              array(
                'param' => 'page_template',
                'operator' => "==",
                'value' => 'page-feature-gradient.php',
              ),
            ),
            // this is another OR group
            array(
              // if you wanted to add an "AND' rule it would go under here
              array(
                'param' => 'page_template',
                'operator' => "&&",
                'value' => 'page-about.php',
              ),
            ),
          ),

    'position'  => 'normal'
  ));
}