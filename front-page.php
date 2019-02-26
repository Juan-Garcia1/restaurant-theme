<?php get_header(); ?>
<style>
  .hero {
    background: url(<?php echo get_theme_mod("hero_image", get_bloginfo("template_url") . "/img/hero_image.jpg"); ?>) no-repeat center center / cover; 
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
          <h2 class="title__secondary"><?php echo get_theme_mod("section-1_secondary_title"); ?></h2>
          <h1 class="title__primary title__primary--black"><?php echo get_theme_mod("section-1_primary_title"); ?></h1>
        </div>
        <!-- title end -->
        <p><?php echo get_theme_mod("section-1_paragraph"); ?></p>
      </div>
      <!-- col end -->
      <div class="col">
        <img src="" alt="image 1 goes here">
        <img src="" alt="image 2 goes here">
      </div>
    </div>
    <!-- row end -->
  </section>
</div>
<!-- container end -->

<section>
  <div class="center">
    <div class="title">
      <h2 class="title__secondary">Tasteful</h2>
      <h1 class="title__primary title__primary--white">recipes</h1>
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
          <h2 class="title__secondary">Discover</h2>
          <h1 class="title__primary title_primary--black">menu</h1>
        </div>
        <!-- title end -->
        <p>For those with pure food indulgence in mind, come next door and state your desires with our ever changing internationally and seasonally inspired samll plates. We love food, lots of different food, just like you.</p>
        <a href="#">view the full menu</a>
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