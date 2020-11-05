<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?php bloginfo('name'); ?></title>

    <!-- fonts -->
    <script src="https://kit.fontawesome.com/a61cb35b75.js" crossorigin="anonymous"></script>

    <?php wp_head(); ?>



  </head>

  <body <?php body_class(); ?>>
    <header class="header">
      <div class="container-fluid">
        <div class="row">
              <div class="col-md-5">
              <div class="social-icons">
              <ul>
                  <li><a><i class="fab fa-facebook-f"></i></a></li>
                  <li><a><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div>
              </div>
              <div class="col-md-7">
                
              </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <img src="wp-content/themes/613lab/images/logo-613.png" alt="">
          </div>
          <div class="col-md-7">
            <div class="home-buttons">
              <button type="button" name="button-yellow">Apply</button>
              <button type="button" name="button-yellowBorder">Learn More</button>
            </div>
            <div class="header-text">
              <h1>Your Business. <br />Ascended.</h1>
            </div>
          </div>

        </div>


      </div>
    </header>
