<?php
/*
Template Name: Static Front Page
*/

get_header();
?>
        <div class="6u">
          <div id="content">
            <?php global $post; ?>
            <h2><?php the_title(); ?></h2> <!-- Page Title -->
            <?php echo $post->post_content ?> <!-- Page Content -->
          </div>
        </div>
        <?php get_sidebar(); ?>
<?php get_footer(); ?>