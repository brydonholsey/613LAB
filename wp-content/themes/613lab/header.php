<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?php bloginfo('name'); ?></title>

    <!-- fonts -->
    <script src="https://kit.fontawesome.com/a61cb35b75.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&family=Raleway:wght@200;400;600&display=swap" rel="stylesheet">

       <!--- scripts -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <?php wp_head(); ?>



  </head>

  <body <?php body_class(); ?>>
    <header class="header">
      <div class="container-fluid header-content">
        <div class="row header-top" id="header-top">
              <div class="col-lg-12 header-icons">
                <div class="social-icons">
                  <?php dynamic_sidebar( 'top-left-home' ); ?>
                </div>
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
              <a href="613LAB/contact"><button type="button" name="button-yellow">Contact</button></a>
              <a href="613LAB/about"><button type="button" name="button-yellowBorder">Learn More</button></a>
            </div>
            <div class="header-text">
              <h1><span>Your Business.</span> <br />Ascended.</h1>
            </div>
          </div>

        </div>


      </div>
    </header>

       <!------------ mobile menu ------------>
       <nav>
                  <div id="hamburger">
                    <div class="line" id="one"></div>
                    <div class="line" id="two"></div>
                    <div class="line" id="three"></div>
                  </div>
                  <div class="mobile-menu">
                      <div><img src="wp-content/themes/613lab/images/logo-613-hz.png" alt=""></div>
                      <div id="slide-out-nav" class="mobile-menu__items">
                        <?php
                          if(has_nav_menu('main-menu')){
                            wp_nav_menu(array(
                              'theme_location'  => 'main-menu',
                              'container_class' => 'main_menu'
                            ));
                          }else{
                            echo "<p>Please select a main menu through the dashboard</p>";
                          }
                        ?>
                      </div>
                      <div>
                      <p><a href="businessascended@613LAB.com">businessascended@613LAB.com</a></p>
                    <p>949 Clark Ave W <br />
                    Vaughan, Ontario L4J 8G6 CA</p>
                       <p> +1 917 651 7282</p>
                        <div class="social-icons">
                          <?php dynamic_sidebar( 'slide-out-menu' ); ?>
                        </div>
                      </div>
                  </div>
                </nav>
              
<!------------- mobile menu end --------------->


<!------------- apply button --------------->
<div id="apply-button" class="apply-button-hide">
<a href="/613LAB/contact"><button type="button" name="button-yellow">Contact</button></a>
</div>
