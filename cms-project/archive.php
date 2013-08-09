<?php get_header(); ?>
<div class="6u">
    <div id="content">
		<h2>
			<?php if ( is_day() ) : /* if the daily archive is loaded */ ?>
				<?php printf( __( 'Daily Archives: <span>%s</span>' ), get_the_date() ); ?>
			<?php elseif ( is_month() ) : /* if the montly archive is loaded */ ?>
				<?php printf( __( 'Monthly Archives: <span>%s</span>' ), get_the_date('F Y') ); ?>
			<?php elseif ( is_year() ) : /* if the yearly archive is loaded */ ?>
				<?php printf( __( 'Yearly Archives: <span>%s</span>' ), get_the_date('Y') ); ?>
			<?php elseif ( is_category() ) : /* if a category is loaded */ ?>
				<?php printf( single_cat_title() ); ?>	
			<?php else : /* if anything else is loaded, ex. if the tags or categories template is missing this page will load */ ?>
				<?php _e('Blog Archives', ''); ?>
			<?php endif; ?>
		</h2>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
                    <?php the_tags('<br/>Tags ',' • ','<br />'); ?>
                  </p>
                  <p class="button-style"><a href="<?php the_permalink() ?>">Read Full Article</a></p>
                </div>
              </section>
		<?php endwhile; ?>
		<?php numeric_posts_nav(); ?>
		<?php endif; ?>
	</div>
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>