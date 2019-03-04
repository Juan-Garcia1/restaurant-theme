<?php get_header(); ?>

<div class="hero">
  <div class="center">
    <div class="title">
      <h2 class="title__secondary mt-0 mb-0" id="greeting"><?php echo get_theme_mod("hero_greeting", "Welcome"); ?></h2>
      <h1 class="title__primary title__primary--white uppercase"><?php echo get_bloginfo("name"); ?></h1>
    </div>
    <!-- title end -->
    <p id="tagline" class="uppercase"><?php echo get_bloginfo("description"); ?></p>
  </div>
</div>

<div class="container">
  <section id="sec-1">
    <div class="row">
      <div class="col text-center">
        <div class="title">
          <h2 class="title__secondary mb-0"><?php echo get_theme_mod("section-1_secondary_title", "Discover"); ?></h2>
          <h1 class="title__primary title__primary--black uppercase"><?php echo get_theme_mod("section-1_primary_title", "our story"); ?></h1>
        </div>
        <!-- title end -->
        <p><?php echo get_theme_mod("section-1_paragraph", "Rosa is a restaurant, bar and coffee roastery located on a busy corner in Farringdon's Exmouth Market. With glazed frontage on two sides of the building, overlooking the market and bustling London intersection."); ?></p>
      </div>
      <!-- col end -->
      <div class="col">
        <div class="center-images">
          <img src="<?php echo get_theme_mod("section-1_img1", get_bloginfo("template_url") . "/img/section_1_img1.jpg"); ?>">
          <img src="<?php echo get_theme_mod("section-1_img2", get_bloginfo("template_url") . "/img/section_1_img2.jpg"); ?>">
        </div>
        <!-- center-images -->
      </div>
      <!-- col end -->
    </div>
    <!-- row end -->
  </section>
</div>
<!-- container end -->

<section id="sec-2" class="sec-2-background-img">
  <div class="center">
    <div class="title text-center">
      <h2 class="title__secondary mt-0 mb-0"><?php echo get_theme_mod("section-2_secondary_title", "Tasteful"); ?></h2>
      <h1 class="title__primary title__primary--white uppercase"><?php echo get_theme_mod("section-2_primary_title", "recipes"); ?></h1>
    </div>
    <!-- title end -->
  </div>
</section>

<div class="container">
  <section id="sec-3">
    <div class="row">
      <div class="col">
        <div class="center-images">
          <img src="<?php echo get_theme_mod("section-3_img1", get_bloginfo("template_url") . "/img/section_3_img1.jpg") ?>" >
          <img src="<?php echo get_theme_mod("section-3_img2", get_bloginfo("template_url") . "/img/section_3_img2.jpg") ?>" >
          <img src="<?php echo get_theme_mod("section-3_img3", get_bloginfo("template_url") . "/img/section_3_img3.jpg") ?>" >
          <img src="<?php echo get_theme_mod("section-3_img4", get_bloginfo("template_url") . "/img/section_3_img4.jpg") ?>" >
        </div>
        <!-- center-images -->
      </div>
      <!-- col end -->
      <div class="col text-center">
        <div class="title">
          <h2 class="title__secondary mb-0"><?php echo get_theme_mod("section-3_secondary_title", "Discover"); ?></h2>
          <h1 class="title__primary title_primary--black uppercase"><?php echo get_theme_mod("section-3_primary_title", "menu"); ?></h1>
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

<section id="sec-4" class="sec-4-background-img">
  <div class="center">
    <div class="title text-center">
      <h2 class="title__secondary mt-0 mb-0"><?php echo get_theme_mod("section-4_secondary_title", "The perfect"); ?></h2>
      <h1 class="title__primary title__primary--white uppercase"><?php echo get_theme_mod("section-4_primary_title", "blend"); ?></h1>
    </div>
    <!-- title end -->
  </div>
</section>

<div class="container">
  <section id="sec-5">
    <div class="row">
      <div class="col text-center">
        <div class="title">
          <h2 class="title__secondary mb-0"><?php echo get_theme_mod("section-5_secondary_title", "Culinary"); ?></h2>
          <h1 class="title__primary title__primary--black uppercase"><?php echo get_theme_mod("section-5_primary_title", "delight"); ?></h1>
        </div>
        <!-- title end -->
        <p><?php echo get_theme_mod("section-5_paragraph", "We promise an intimate and relaxed dining experience that offers something different to local and foreign patrons and ensures you enjoy a memorable food experience every time."); ?></p>
      </div>
      <!-- col end -->
      <div class="col">
        <div class="center-images">
          <img src="<?php echo get_theme_mod("section-5_img1", get_bloginfo("template_url") . "/img/section_5_img1.jpg"); ?>" >
          <img src="<?php echo get_theme_mod("section-5_img2", get_bloginfo("template_url") . "/img/section_5_img2.jpg"); ?>" >
        </div>
        <!-- center-images -->
      </div>
      <!-- col end -->
    </div>
    <!-- row end -->
  </section>
</div>
<!-- container end -->

<?php get_footer(); ?>