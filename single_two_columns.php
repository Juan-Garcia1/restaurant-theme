<?php
/*
Template Name: Two-column layout
Template Post Type: post
*/
?>

<?php get_header(); ?>
  <div class="content">
    <?php while( have_posts() ) : the_post() ?>
      <h1><?php the_title(); ?></h1>
      <?php the_post_thumbnail("large"); ?>
      <?php the_content(); ?>
      <?php if( the_tags() ) : ?>      
        <?php the_tags(); ?>
      <?php endif; ?>
    <?php endwhile; ?>
  </div>
  <?php get_sidebar(); ?>
<?php get_footer(); ?>