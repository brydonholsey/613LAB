<?php

/*

  Template Name: Internal
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
        <div class="row">
            <div class="col">
            <section id="int-1">
             <?php the_content(); ?>
            </section>
            </div>

        </div>

    </div>

     



</main>



<?php  } //end while
} //end if


?>



<?php get_footer(); ?>
