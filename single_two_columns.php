<?php
/*
Template Name: Two-column layout
Template Post Type: post
*/
?>

<?php get_header(); ?>
  <div class="container">
    <div class="grid">
      <div class="content">
        <?php while( have_posts() ) : the_post() ?>
          <h1 class="uppercase"><?php the_title(); ?></h1>
          <hr>
          <div class="featured-img">
            <?php the_post_thumbnail(); ?>
          </div>
          <?php the_content(); ?>
          <?php if( the_tags() ) : ?>      
            <?php the_tags(); ?>
          <?php endif; ?>
        <?php endwhile; ?>
      </div>
      <!-- content -->
      <?php get_sidebar(); ?>
    </div>
    <!-- grid -->
  </div>
  <!-- container -->
<?php get_footer(); ?>