<?php


if ( is_front_page() ) :
    get_header();
else :
    get_header('int');
endif; ?>



<div class="container">
  <div class="row">
    <main class="col-md-8">
      <section class="blog-article">
            <?php
              if(have_posts()){
                while(have_posts()){
                  the_post(); ?>
                    <article>
                      <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                      <?php
                        //display author and publish date links
                        post_data();
                      ?>

                      <p><?php echo get_the_excerpt(); ?></p>

                      <a href="<?php the_permalink(); ?>">Read more</a>

                    </article>

      <?php
          }//end while loop

          //pagination
          myPagination();


        }//end if statement

        ?>
      </section>

    </main>
    <aside class="col-md-4 archive-right-sidebar">
      <div class="search-form">
        <?php get_search_form(); ?>
      </div class="sidebar-categories">
        <?php dynamic_sidebar('sidebar'); ?>
    </aside>
  </div>
</div>


<?php get_footer(); ?>
