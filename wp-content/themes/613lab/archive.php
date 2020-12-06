<?php
if ( is_front_page() ) :
    get_header();
else :
    get_header('int');
endif; ?>

<div class="container">
  <div class="row">
    <main class="col-md-9">
      <section class="archive-container">
        <h2 class="archive-title"><?php
          if(is_category()){
            single_cat_title();
          }elseif(is_tag()){
            single_tag_title();
          }elseif(is_day()){
            echo "Daily Archives: " . get_the_date();
          }elseif(is_month()){
            echo "Monthly Archives: " . get_the_date('F Y');
          }elseif(is_year()){
            echo "Yearly Archives: " . get_the_date('Y');
          }else{
            echo "Archives";
          }
          ?>
        </h2>

        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();?>

              <article class="individual-post">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="archive-image"><?php the_post_thumbnail('large'); ?></div>

                  <?php
                    //display author and publish date links
                    post_data();
                  ?>

                 <?php the_excerpt(); ?>
              </article>
          <?php  } //end while

          //pagination
          myPagination();

        } //end if

        ?>
      </section>
    </main>

    <?php
    //Inserts Archive sidebar
    archiveSidebar();
     ?>
  </div><!-- row -->
</div><!-- container -->

<?php get_footer(); ?>
