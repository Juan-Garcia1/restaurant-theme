<?php
/*
Template Name: Two-column layout
Template Post Type: post
*/
?>

<?php get_header(); ?>
  <div>
    <?php while( have_posts() ) : the_post() ?>
      <h1><?php the_title(); ?></h1>
      <?php the_post_thumbnail("large"); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </div>
  <div>
    sidebar goes here
  </div>
<?php get_footer(); ?>