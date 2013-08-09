<?php
/*
Template Name: Custom Post Template
*/

get_header();
?>  
        <div class="9u">
          <div id="content">  
            <section>
              <div class="post">  
                <?php 
                  if(have_posts()):
                      while(have_posts()):
                          the_post();
                ?>
                <h2><?php the_title(); ?></h2>
                <small>posted on 
                  <?php the_time('l, F jS, Y') ?> at 
                  <?php the_time() ?>, by <a href="<?php the_author_link() ?>" title="<?php the_author() ?>"><?php the_author() ?></a>

                </small>
                <p class="tags"><?php the_tags('<br/>Tags ',' • ','<br />'); ?></p>
                    <?php the_content(); ?>
                    <?php comments_template( '', true ); ?>
                <?php
                      endwhile;
                  endif;
                ?>
              </div>
            </section>
          </div>
        </div>
        <div class="3u">
          <div id="sidebar2">
            <section>
              <?php if(!dynamic_sidebar('sidebar-2')): ?>
              <div class="sbox1">
                <h2>Categories</h2>
                <ul>
                  <?php
                    wp_list_categories(array(
                      'title_li' => ''
                      ));
                  ?>
                </ul>
              </div>
            <?php endif; ?>  
            </section>
          </div>
        </div>      
<?php get_footer(); ?>