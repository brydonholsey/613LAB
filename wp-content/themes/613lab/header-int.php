<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?php bloginfo('name'); ?></title>

    <!-- fonts -->
    <script src="https://kit.fontawesome.com/a61cb35b75.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&family=Raleway:wght@200;400;600&display=swap" rel="stylesheet">

    <?php wp_head(); ?>



  </head>

  <body <?php body_class(); ?>>
    <header class="header">
      <div class="container-fluid header-content">
        <div class="row header-top">
              <div class="col-lg-12 header-icons">
                <div class="social-icons">
                <ul>
                    <li><a><i class="fab fa-facebook-f"></i></a></li>
                    <li><a><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>

                <!------------ mobile menu ------------>
                <div>
                  <div id="hamburger">
                    <i class="fas fa-bars"></i>
                  </div>
                  <div class="mobile-menu">
                    <div class="mobile-menu__items">
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
                  </div>
                </div>
              
<!------------- mobile menu end --------------->

              </div>
 
        </div>
        


      </div>
    </header>
