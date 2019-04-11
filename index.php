<?php 
$the_query = new WP_Query( array(
  "post_type" => "post",
  "order" => "ASC"
) ); 
?>

<?php get_header(); ?>
  <main>
    <div class="container">
      <?php if( $the_query->have_posts() ) : ?>
        <?php while( $the_query->have_posts() ) : $the_query->the_post() ?>
          <article class="post row">
            <div class="col text-center mb-md">
              <header>
              <p class="post-date"><?php the_date("M • nS • Y"); ?></p>
                <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              </header>
              <?php the_excerpt(); ?>
              <a class="post-link" href="<?php the_permalink(); ?>">read more</a>
            </div>
            <div class="col double-col">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
            </div>
          </article>
        <?php endwhile; ?>
        <?php else : ?>
          <p>There are no posts.</p>
      <?php endif; ?>
    </div>
  </main>
<?php get_footer(); ?>