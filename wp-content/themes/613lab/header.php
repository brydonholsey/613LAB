<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header>

        <div class="row">
          <div class="col-lg-12">
            <div class="home-header-image"><?php the_post_thumbnail(''); ?></div>
            <div class="overlay"> <img src="images/home-overlay.png" alt=""> </div>

          </div>
        </div>



    </header>
