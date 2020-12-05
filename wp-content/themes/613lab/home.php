<?php


if ( is_front_page() ) :
    get_header();
else :
    get_header('int');
endif; ?>



<div class="container-fluid" id="blog-page-content">
    <div class="row">
    <main class="container">
      <section class="blog-article row">
            <?php
              if(have_posts()){
                while(have_posts()){
                  the_post(); ?>
                  
                    <article class="col-lg-6">
                    <div class="post-box">
                        <div class="post-image"><?php the_post_thumbnail('large'); ?></div>
                        <div class="post-box-text">
                            <h3><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                            <div class="post-data"><?php
                                //display author and publish date links
                                post_data();
                            ?></div>

                            <p><?php echo wp_trim_words( get_the_content(), 30, ' [..]' ); ?></p>

                            <a href="<?php the_permalink(); ?>"><button>Read more</button></a>
                        </div>
                     
                      </div>
                    </article>
               
                  
                    

      <?php
          }//end while loop

          //pagination
          myPagination();


        }//end if statement

        ?>
      </section>

    </main>
    </div>
</div>


<?php get_footer(); ?>
