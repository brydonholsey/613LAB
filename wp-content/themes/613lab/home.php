<?php

/*

  Template Name: Homepage
  Template Post Type: page

*/


if ( is_front_page() ) :
    get_header();
else :
    get_header('int');
endif; 

if(have_posts()){
  while(have_posts()) {
    the_post(); ?>

<main>
    <div class="container-fluid">
    <?php if(!empty(get_field('section-1'))) { ?>
        <section class="home-1">
            <?php the_field('section-1') ?>
            <?php if(!empty(get_field('section-1-button'))) { ?>
                <?php the_field('section-1-button') ?>
            <?php } ?>
            
        </section>
   <?php } ?>





        <section class="home-11">
            <div class="text-content">
            <?php
              if(!empty(get_field('section-1'))) { ?>
               <?php the_field('section-1') ?>
              <?php } ?>
            </div>
            <?php
            if(!empty(get_field('section-1-button'))) { ?>
            <button type="button" name="learn-more"><?php the_field('section-1-button'); ?></button>
          <?php } ?>
        </section>

        <section class="home-2">
        </section>

        <section class="home-3">
        </section>

        <section class="home-4">
        </section>

        <section class="home-5">
        </section>

        <section class="home-6">
        </section>

    </div>

</main>



<?php  } //end while
} //end if


?>



<?php get_footer(); ?>
