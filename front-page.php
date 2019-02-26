<?php get_header(); ?>
<style>
  .hero {
    background: url(<?php echo get_theme_mod("hero_image", get_bloginfo("template_url") . "/img/hero_image.jpg"); ?>) no-repeat center center / cover; 
  }
  .sec-2-background-img {
    background: url(<?php echo get_theme_mod("section-2_background_image", get_bloginfo("template_url") . "/img/section_2_img.jpg"); ?>) no-repeat center center / cover; 
  }
</style>

<div class="hero">
  <div class="container">
    <div class="title">
      <h2 class="title__secondary"><?php echo get_theme_mod("hero_greeting"); ?></h2>
      <h1 class="title__primary title__primary--white"><?php echo get_bloginfo("name"); ?></h1>
    </div>
    <!-- title end -->
    <p><?php echo get_bloginfo("description"); ?></p>
  </div>
</div>

<div class="container">
  <section>
    <div class="row">
      <div class="col">
        <div class="title">
          <h2 class="title__secondary"><?php echo get_theme_mod("section-1_secondary_title", "Discover"); ?></h2>
          <h1 class="title__primary title__primary--black"><?php echo get_theme_mod("section-1_primary_title", "our story"); ?></h1>
        </div>
        <!-- title end -->
        <p><?php echo get_theme_mod("section-1_paragraph", "Rosa is a restaurant, bar and coffee roastery located on a busy corner in Farringdon's Exmouth Market. With glazed frontage on two sides of the building, overlooking the market and bustling London intersection."); ?></p>
      </div>
      <!-- col end -->
      <div class="col">
        <img src="<?php echo get_theme_mod("section-1_img1", get_bloginfo("template_url") . "/img/section_1_img1.jpg"); ?>">
        <img src="<?php echo get_theme_mod("section-1_img2", get_bloginfo("template_url") . "/img/section_1_img2.jpg"); ?>">
      </div>
    </div>
    <!-- row end -->
  </section>
</div>
<!-- container end -->

<section class="sec-2-background-img">
  <div class="center">
    <div class="title">
      <h2 class="title__secondary"><?php echo get_theme_mod("section-2_secondary_title", "Tasteful"); ?></h2>
      <h1 class="title__primary title__primary--white"><?php echo get_theme_mod("section-2_primary_title", "recipes"); ?></h1>
    </div>
    <!-- title end -->
  </div>
</section>

<div class="container">
  <section>
    <div class="row">
      <div class="col">
      <img src="" alt="image 1 goes here">
      <img src="" alt="image 2 goes here">
      <img src="" alt="image 3 goes here">
      <img src="" alt="image 4 goes here">
      </div>
      <!-- col end -->
      <div class="col">
        <div class="title">
          <h2 class="title__secondary"><?php echo get_theme_mod("section-3_secondary_title", "Discover"); ?></h2>
          <h1 class="title__primary title_primary--black"><?php echo get_theme_mod("section-3_primary_title", "menu"); ?></h1>
        </div>
        <!-- title end -->
        <p><?php echo get_theme_mod("section-3_paragraph", "For those with pure food indulgence in mind, come next door and state your desires with our ever changing internationally and seasonally inspired samll plates. We love food, lots of different food, just like you."); ?></p>
        <a href="<?php echo get_permalink(get_theme_mod("section-3_link")); ?>"><?php echo get_theme_mod("section-3_link_text", "view the full menu"); ?></a>
      </div>
      <!-- col end -->
    </div>
    <!-- row end -->
  </section>
</div>
<!-- container end -->

<section>
  <div class="center">
    <div class="title">
      <h2 class="title__secondary">The perfect</h2>
      <h1 class="title__primary title__primary--white">blend</h1>
    </div>
    <!-- title end -->
  </div>
</section>

<div class="container">
  <section>
    <div class="row">
      <div class="col">
        <div class="title">
          <h2 class="title__secondary">Culinary</h2>
          <h1 class="title__primary title__primary--black">delight</h1>
        </div>
        <!-- title end -->
        <p>We promise an intimate and relaxed dining experience that offers something different to local and foreign patrons and ensures you enjoy a memorable food experience every time.</p>
      </div>
      <!-- col end -->
      <div class="col">
        <img src="" alt="image1 goes here">
        <img src="" alt="image 2 goes here">
      </div>
      <!-- col end -->
    </div>
    <!-- row end -->
  </section>
</div>
<!-- container end -->

<?php get_footer(); ?>