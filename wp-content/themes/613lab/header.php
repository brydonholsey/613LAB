<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?php bloginfo('name'); ?></title>

    <!-- fonts -->
    <script src="https://kit.fontawesome.com/a61cb35b75.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&family=Raleway:wght@200;400;600&display=swap" rel="stylesheet">

    <?php wp_head(); ?>



  </head>

  <body <?php body_class(); ?>>
    <header class="header">
      <div class="container-fluid header-content">
        <div class="row header-top">
              <div class="col-md-6">
                <div class="social-icons">
                <ul>
                    <li><a><i class="fab fa-facebook-f"></i></a></li>
                    <li><a><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                
              </div>
        </div>
        <div class="row center-header">
          <div class="col-md-5">
            <div class="home-logo">
              <img src="wp-content/themes/613lab/images/logo-613.png" alt="">
            </div>
          </div>

          <div class="col-md-7 center-header-right">
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
