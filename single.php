<?php get_header(); ?>
  <?php while( have_posts() ) : the_post() ?>
    <h1><?php the_title(); ?></h1>
    <?php the_post_thumbnail("large"); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
<?php get_footer(); ?>