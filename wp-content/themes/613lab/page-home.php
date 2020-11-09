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
    

        <?php if(!empty(get_field('section-1'))) { ?>
            <section id="home-1">
                <div class="container">
                <?php if(!empty(get_field('section-1-header'))) { ?>
                    <div class="section-header">
                        <?php the_field('section-1-header') ?>
                    </div>
                <?php } ?>

                <?php if(!empty(get_field('section-1-subheader'))) { ?>
                    <div class="section-subheader">
                        <h3><?php the_field('section-1-subheader') ?></h3>
                    </div>
                <?php } ?>

                <?php if(!empty(get_field('section-1-content'))) { ?>
                    <div class="section-content two-column-text">
                        <?php the_field('section-1-content') ?>
                    </div>
                    
                <?php } ?>

                <?php if(!empty(get_field('section-1-button'))) { ?>
                        <div class="center-button">
                            <button type="button" name="learn-more"><?php the_field('section-1-button'); ?></button>
                        </div>
                <?php } ?>

                </div>
            </section>
        <?php } ?>

        <?php if(!empty(get_field('section-2'))) { ?>
            <section id="home-2">
                <div class="container">
                    <div class="section-content">
                        <?php the_field('section-2') ?>
                    </div>
                    <?php if(!empty(get_field('section-2-button'))) { ?>
                        <button type="button" name="learn-more"><?php the_field('section-2-button'); ?></button>
                    <?php } ?>
                </div>
                
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

        <?php if(!empty(get_field('application-step-1'))) { ?>
            <section id="home-4">
                <div class="application-process">
                    <div class="step-1 application-width-30">
                        <div class="application-box">
                            <h2 class="app-number">1</h2>
                            <div class="app-text"><?php the_field('application-step-1') ?></div>
                        </div>
                    </div>
                    <div id="app-process" class="application-width-30"><h2 class="application-box">Application<br />Process</h2></div>
                    <div class="step-2 application-width-30">
                        <div class="application-box">
                            <h2 class="app-number">2</h2>
                            <div class="app-text"><?php the_field('application-step-2') ?></div>
                        </div>
                    </div>
                    <div class="step-3 application-width-50">
                        <div class="application-box">
                            <h2 class="app-number">3</h2>
                            <div class="app-text"><?php the_field('application-step-3') ?></div>
                        </div>
                    </div>
                    <div class="step-4 application-width-50">
                        <div class="application-box">
                            <h2 class="app-number">4</h2>
                            <div class="app-text"><?php the_field('application-step-4') ?></div>
                        </div>
                    </div>
                </div>
                
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



</main>



<?php  } //end while
} //end if


?>



<?php get_footer(); ?>
