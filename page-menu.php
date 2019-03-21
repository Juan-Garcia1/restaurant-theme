<?php
/*
Template Name: Menu
Template Post Type: page
*/
get_header();
?>
<h1><?php the_title(); ?></h1>

<?php if(get_field("about")) : ?>
  <?php the_field("about"); ?>
<?php endif; ?>
<?php get_footer(); ?>
