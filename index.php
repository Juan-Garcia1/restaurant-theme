<?php get_header(); ?>
<?php if( have_posts() ) : ?>
  <?php while( have_posts() ) : the_post() ?>
    <article>
      <header>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </header>
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("medium");?></a>
    </article>
  <?php endwhile; ?>
  <?php else : ?>
    <p>There are no posts.</p>
<?php endif; ?>
<?php get_footer(); ?>