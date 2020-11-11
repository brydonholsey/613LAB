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
    <header id="header-int" class="header">
      <div class="container-fluid header-content">
        <div class="row header-top" id="header-top-int">
              <div class="col-lg-12 header-icons">
                <div class="social-icons">
                  <ul>
                    <li><a><i class="fab fa-facebook-f"></i></a></li>
                    <li><a><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>

        </div>
        <div class="page-title">
          <h1><?php echo get_the_title(); ?></h1>
        </div>
        


      </div>
    </header>

    <!------------ mobile menu ------------>
    <nav>
                  <div id="hamburger">
                    <div class="line" id="one-int"></div>
                    <div class="line" id="two-int"></div>
                    <div class="line" id="three-int"></div>
                  </div>
                  <div class="mobile-menu">
                      <div><img src="../wp-content/themes/613lab/images/logo-613-hz.png" alt=""></div>
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
                        <p>1234 Main Street <br />
                        Ontario, Canada</p>
                        <div class="social-icons">
                  <ul>
                    <li><a><i class="fab fa-facebook-f"></i></a></li>
                    <li><a><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
                      </div>
                  </div>
                </nav>
              
<!------------- mobile menu end --------------->


<!------------- apply button --------------->
<div id="apply-button-int">
<button type="button" name="button-yellow">Apply</button>
</div>
