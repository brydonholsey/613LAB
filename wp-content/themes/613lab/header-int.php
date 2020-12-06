<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?php bloginfo('name'); ?></title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&family=Raleway:wght@200;400;600&display=swap" rel="stylesheet">

    <!--- scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <?php wp_head(); ?>



  </head>

  <body <?php body_class(); ?>>
    <header id="header-int" class="header">
      <div class="container-fluid header-content">
        <div class="row header-top" id="header-top-int">
              <div class="col-sm-4 header-icons">
                <div class="social-icons">
                  <?php dynamic_sidebar( 'top-left-int' ); ?>
                </div>
              </div>
              <div class="col-sm-4 interior-top-logo">
              <?php
              //Display logo if it is set, if not, display site title
              if(get_header_image() == ''){?>
                <h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name');?></a></h1>
              <?php }else{ ?>
                <a href="<?php echo get_home_url(); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?> " width="<?php echo get_custom_header()->width; ?>" alt="Logo" /></a>
              <?php } ?>
              </div>

        </div>
        <div class="page-title">
          <h1><?php 
    if ( is_home() ) {
      echo "Blog";
    } else if (is_single()) { // POST
      echo "Blog";
    } else if (is_page()) { // PAGE
      echo get_the_title();
    } else if (is_archive()) {
      echo "Blog";
    } else if(is_category()) {
      $arr = get_the_category();
      if ( ! empty( $arr ) ) {
        echo esc_html( $arr[0]->name );   
      }
    }?></h1>
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
                      <div><?php
              //Display logo if it is set, if not, display site title
              if(get_header_image() == ''){?>
                <h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name');?></a></h1>
              <?php }else{ ?>
                <a href="<?php echo get_home_url(); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?> " width="<?php echo get_custom_header()->width; ?>" alt="Logo" /></a>
              <?php } ?></div>
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
<div id="apply-button-int">
<a href="/613LAB/contact"><button type="button" name="button-yellow">Contact</button></a>
</div>
