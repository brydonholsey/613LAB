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
    <div class="container">

        <?php if(!empty(get_field('section-1'))) { ?>
            <section id="home-1">

                <?php if(!empty(get_field('section-1-header'))) { ?>
                    <p><?php the_field('section-1-header') ?></p>
            <?php } ?>

            <?php if(!empty(get_field('section-1-subheader'))) { ?>
                <p><?php the_field('section-1-subheader') ?></p>
            <?php } ?>

            <?php if(!empty(get_field('section-1-content'))) { ?>
                <p><?php the_field('section-1-content') ?></p>
            <?php } ?>

                <?php if(!empty(get_field('section-1-button'))) { ?>
                    <button type="button" name="learn-more"><?php the_field('section-1-button'); ?></button>
            <?php } ?>
            </section>
        <?php } ?>

        <?php if(!empty(get_field('section-2'))) { ?>
            <section id="home-2">
                <?php the_field('section-2') ?>
                <?php if(!empty(get_field('section-2-button'))) { ?>
                    <button type="button" name="learn-more"><?php the_field('section-2-button'); ?></button>
            <?php } ?>
            </section>
        <?php } ?>

        <?php if(!empty(get_field('section-3'))) { ?>
            <section id="home-3">
                <?php the_field('section-3') ?>
                <?php if(!empty(get_field('section-3-button'))) { ?>
                    <button type="button" name="learn-more"><?php the_field('section-3-button'); ?></button>
            <?php } ?>
            </section>
        <?php } ?>

        <?php if(!empty(get_field('section-4'))) { ?>
            <section id="home-4">
                <?php the_field('section-4') ?>
                <?php if(!empty(get_field('section-4-button'))) { ?>
                    <button type="button" name="learn-more"><?php the_field('section-4-button'); ?></button>
            <?php } ?>
            </section>
        <?php } ?>

        <?php if(!empty(get_field('section-5'))) { ?>
            <section id="home-5">
                <?php the_field('section-5') ?>
                <?php if(!empty(get_field('section-5-button'))) { ?>
                    <button type="button" name="learn-more"><?php the_field('section-5-button'); ?></button>
            <?php } ?>
            </section>
        <?php } ?>

        <?php if(!empty(get_field('section-6'))) { ?>
            <section id="home-6">
                <?php the_field('section-6') ?>
                <?php if(!empty(get_field('section-6-button'))) { ?>
                    <button type="button" name="learn-more"><?php the_field('section-6-button'); ?></button>
            <?php } ?>
            </section>
        <?php } ?>

        <?php if(!empty(get_field('section-7'))) { ?>
            <section id="home-7">
                <?php the_field('section-7') ?>
                <?php if(!empty(get_field('section-7-button'))) { ?>
                    <button type="button" name="learn-more"><?php the_field('section-7-button'); ?></button>
            <?php } ?>
            </section>
        <?php } ?>

        <?php if(!empty(get_field('section-8'))) { ?>
            <section id="home-8">
                <?php the_field('section-8') ?>
                <?php if(!empty(get_field('section-8-button'))) { ?>
                    <button type="button" name="learn-more"><?php the_field('section-8-button'); ?></button>
            <?php } ?>
            </section>
        <?php } ?>

        <?php if(!empty(get_field('section-9'))) { ?>
            <section id="home-9">
                <?php the_field('section-9') ?>
                <?php if(!empty(get_field('section-9-button'))) { ?>
                    <button type="button" name="learn-more"><?php the_field('section-9-button'); ?></button>
            <?php } ?>
            </section>
        <?php } ?>

        <?php if(!empty(get_field('section-10'))) { ?>
            <section id="home-10">
                <?php the_field('section-10') ?>
                <?php if(!empty(get_field('section-10-button'))) { ?>
                    <button type="button" name="learn-more"><?php the_field('section-10-button'); ?></button>
            <?php } ?>
            </section>
        <?php } ?>





    </div>

</main>



<?php  } //end while
} //end if


?>



<?php get_footer(); ?>
