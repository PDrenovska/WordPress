<?php get_header(); ?>
        <div class="6u">
          <div id="content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>            
              <section>
                <div class="post">
                  <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                  <p>
                    <a href="<?php the_permalink() ?>">
                      <?php
                      if ( has_post_thumbnail() ) { ?>
                      <?php the_post_thumbnail(); ?>
                      <?php } else { ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/noimage.jpg" alt=""/>
                      <?php } ?>
                    </a>
                    <?php wpe_excerpt('wpe_excerptlength_index', ''); ?>
                    <br/><small>posted on 
                      <?php the_time('l, F jS, Y') ?> at 
                      <?php the_time() ?>, by <?php the_author() ?>
                    </small>
                  </p>
                  <p><?php the_tags('<br/>Tags ',' • ','<br />'); ?></p>
                  <p class="button-style"><a href="<?php the_permalink() ?>">Read Full Article</a></p>
                </div>
              </section>
               <?php endwhile; ?>
               <?php numeric_posts_nav(); ?>

            <?php endif; ?>
          </div>
        </div>
        <?php get_sidebar(); ?>  
<?php get_footer(); ?>