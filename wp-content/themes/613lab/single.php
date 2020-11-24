<?php
if ( is_front_page() ) :
    get_header();
else :
    get_header('int');
endif; ?>

<div class="container">
  <main class="row">
    <?php
    if(have_posts()){
      while(have_posts()){
        the_post(); ?>
        <section class="col-md-12">
          <h2><?php echo get_the_title(); ?></h2>
          <?php the_post_thumbnail('large'); ?>

          <div class="post-data-text">
            <?php
              //display author and publish date links
              post_data();
            ?>
          </div>

          <?php the_content(); ?>
        </section>

      <?php } //end while
    } //end if

    ?>
  </main> <!--end row-->

  <?php
  //Navigates to the previous/next post
  myPostNavigation();
  ?>

</div><!--end container-->


<?php get_footer(); ?>
