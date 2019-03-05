<?php
// APPEARENCE CUSTOMIZE OPTIONS
  // vocab:
  // 1. Control(UI) - color picker, textarea, ...
  // 2. Settings(Database) - saves/set values into a setting to later get or load a value from a setting
  // 3. Sections(Group) - a group of options. example: Navigation, Widgets, ...
function rosa_customize_register($wp_customize) {

  // SITE IDENTITY
  $wp_customize->get_setting("blogname")->transport = "postMessage";
  $wp_customize->get_setting("blogdescription")->transport = "postMessage";

  // THEME COLORS SECTION
  $wp_customize->add_section("color", array(
    "title" => __("Colors", "rosa")
  ));

  $wp_customize->add_setting("color_primary", array(
    "default" => "#c59d5f",
    "transport" => "postMessage"
  ));

  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, "color_primary", array(
    "label" => __("Primary", "rosa"),
    "section" => "color",
    "setting" => "color_primary"
  )) );

  $wp_customize->add_setting("color_secondary", array(
    "default" => "#252525",
    "transport" => "postMessage"
  ));

  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, "color_secondary", array(
    "label" => __("Secondary", "rosa"),
    "section" => "color",
    "setting" => "color_secondary"
  )) );

  // HERO SECTION
  $wp_customize->add_section("hero", array(
    "title" => __("Hero", "rosa")
  ));

  $wp_customize->add_setting("hero_greeting", array(
    "default" => "Welcome",
    "transport" => "postMessage"
  ));

  $wp_customize->add_setting("hero_image", array(
    "default" => get_bloginfo("template_directory") . "/img/hero_image.jpg",
    "transport" => "postMessage"
  ));

  $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, "hero_image", array(
    "label" => __("Background Image", "rosa"),
    "section" => "hero",
    "settings" => "hero_image"
    )) );

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, "hero_greeting", array(
    "label" => __("Greeting", "rosa"),
    "section" => "hero",
    "settings" => "hero_greeting"
    )) );

    // SECTION 1
    $wp_customize->add_section("section-1", array(
      "title" => __("Section 1", "rosa")
    ));

    $wp_customize->add_setting("section-1_primary_title", array(
      "default" => "our story",
      "transport" => "postMessage"
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "section-1_primary_title", array(
      "label" => __("Primary Title", "rosa"),
      "section" => "section-1",
      "setting" => "section-1_primary_title",
      "priority" => 2
    )) );

    $wp_customize->add_setting("section-1_secondary_title", array(
      "default" => "Discover",
      "transport" => "postMessage"
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "section-1_secondary_title", array(
      "label" => __("Secondary Title", "rosa"),
      "section" => "section-1",
      "setting" => "section-1_secondary_title",
      "priority" => 1
    )) );

    $wp_customize->add_setting("section-1_paragraph", array(
      "default" => "Rosa is a restaurant, bar and coffee roastery located on a busy corner in Farringdon's Exmouth Market. With glazed frontage on two sides of the building, overlooking the market and bustling London intersection.",
      "transport" => "postMessage"
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "section-1_paragraph", array(
      "label" => __("Paragraph", "rosa"),
      "section" => "section-1",
      "setting" => "section-1_paragraph",
      "type" => "textarea",
      "priority" => 3
    )) );

    $wp_customize->add_setting("section-1_img1", array(
      "default" => get_bloginfo("template_directory") . "/img/section_1_img1.jpg",
      "transport" => "postMessage"
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, "section-1_img1", array(
      "label" => __("Image One", "rosa"),
      "section" => "section-1",
      "settings" => "section-1_img1",
      "priority" => 4
      )) );

      $wp_customize->add_setting("section-1_img2", array(
        "default" => get_bloginfo("template_directory") . "/img/section_1_img2.jpg",
        "transport" => "postMessage"
      ));
    
      $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, "section-1_img2", array(
        "label" => __("Image Two", "rosa"),
        "section" => "section-1",
        "settings" => "section-1_img2",
        "priority" => 5
        )) );

    // SECTION 2
    $wp_customize->add_section("section-2", array(
      "title" => __("Section 2", "rosa")
    ));

    $wp_customize->add_setting("section-2_primary_title", array(
      "default" => "recipes",
      "transport" => "postMessage"
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "section-2_primary_title", array(
      "label" => __("Primary Title", "rosa"),
      "section" => "section-2",
      "setting" => "section-2_primary_title",
      "priority" => 3
    )) );

    $wp_customize->add_setting("section-2_secondary_title", array(
      "default" => "Tasteful",
      "transport" => "postMessage"
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "section-2_secondary_title", array(
      "label" => __("Secondary Title", "rosa"),
      "section" => "section-2",
      "setting" => "section-2_secondary_title",
      "priority" => 2
    )) );

    $wp_customize->add_setting("section-2_background_image", array(
      "default" => get_bloginfo("template_directory") . "/img/section_2_img.jpg",
      "transport" => "postMessage"
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, "section-2_background_image", array(
      "label" => __("Background Image", "rosa"),
      "section" => "section-2",
      "settings" => "section-2_background_image",
      "priority" => 1
      )) );

    // SECTION 3
    $wp_customize->add_section("section-3", array(
      "title" => __("Section 3", "rosa")
    ));

    $wp_customize->add_setting("section-3_primary_title", array(
      "default" => "menu",
      "transport" => "postMessage"
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "section-3_primary_title", array(
      "label" => __("Primary Title", "rosa"),
      "section" => "section-3",
      "setting" => "section-3_primary_title",
      "priority" => 2
    )) );

    $wp_customize->add_setting("section-3_secondary_title", array(
      "default" => "Discover",
      "transport" => "postMessage"
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "section-3_secondary_title", array(
      "label" => __("Secondary Title", "rosa"),
      "section" => "section-3",
      "setting" => "section-3_secondary_title",
      "priority" => 1
    )) );

    $wp_customize->add_setting("section-3_paragraph", array(
      "default" => "For those with pure food indulgence in mind, come next door and state your desires with our ever changing internationally and seasonally inspired samll plates. We love food, lots of different food, just like you.",
      "transport" => "postMessage"
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "section-3_paragraph", array(
      "label" => __("Paragraph", "rosa"),
      "section" => "section-3",
      "setting" => "section-3_paragraph",
      "type" => "textarea",
      "priority" => 3
    )) );

    $wp_customize->add_setting("section-3_link_text", array(
      "default" => "view the full menu",
      "transport" => "postMessage"
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "section-3_link_text", array(
      "label" => __("Link Text", "rosa"),
      "section" => "section-3",
      "settings" => "section-3_link_text",
      "type" => "text",
      "priority" => 4
    )) );

    $wp_customize->add_setting("section-3_link", array(
      "transport" => "postMessage"
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "section-3_link", array(
      "label" => __("Link", "rosa"),
      "section" => "section-3",
      "settings" => "section-3_link",
      "type" => "dropdown-pages",
      "priority" => 5
    )) );

    $wp_customize->add_setting("section-3_img1", array(
      "default" => get_bloginfo("template_directory") . "/img/section_3_img1.jpg",
      "transport" => "postMessage"
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, "section-3_img1", array(
      "label" => __("Image One", "rosa"),
      "section" => "section-3",
      "settings" => "section-3_img1",
      "priority" => 6
    )) );
    
    $wp_customize->add_setting("section-3_img2", array(
      "default" => get_bloginfo("template_directory") . "/img/section_3_img2.jpg",
      "transport" => "postMessage"
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, "section-3_img2", array(
      "label" => __("Image Two", "rosa"),
      "section" => "section-3",
      "settings" => "section-3_img2",
      "priority" => 7
    )) );

    $wp_customize->add_setting("section-3_img3", array(
      "default" => get_bloginfo("template_directory") . "/img/section_3_img3.jpg",
      "transport" => "postMessage"
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, "section-3_img3", array(
      "label" => __("Image Three", "rosa"),
      "section" => "section-3",
      "settings" => "section-3_img3",
      "priority" => 8
    )) );

    $wp_customize->add_setting("section-3_img4", array(
      "default" => get_bloginfo("template_directory") . "/img/section_3_img4.jpg",
      "transport" => "postMessage"
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, "section-3_img4", array(
      "label" => __("Image Four", "rosa"),
      "section" => "section-3",
      "settings" => "section-3_img4",
      "priority" => 9
    )) );

    // SECTION 4
    $wp_customize->add_section("section-4", array(
      "title" => __("Section 4")
    ));

    $wp_customize->add_setting("section-4_primary_title", array(
      "default" => "blend",
      "transport" => "postMessage"
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "section-4_primary_title", array(
      "label" => __("Primary Title", "rosa"),
      "section" => "section-4",
      "setting" => "section-4_primary_title",
      "priority" => 3
    )) );

    $wp_customize->add_setting("section-4_secondary_title", array(
      "default" => "The perfect",
      "transport" => "postMessage"
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "section-4_secondary_title", array(
      "label" => __("Secondary Title", "rosa"),
      "section" => "section-4",
      "setting" => "section-4_secondary_title",
      "priority" => 2
    )) );

    $wp_customize->add_setting("section-4_background_image", array(
      "default" => get_bloginfo("template_directory") . "/img/section_4_img.jpg",
      "transport" => "postMessage"
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, "section-4_background_image", array(
      "label" => __("Background Image", "rosa"),
      "section" => "section-4",
      "settings" => "section-4_background_image",
      "priority" => 1
      )) );
    
    // SECTION 5
    $wp_customize->add_section("section-5", array(
      "title" => __("Section 5", "rosa")
    ));

    $wp_customize->add_setting("section-5_primary_title", array(
      "default" => "delight",
      "transport" => "postMessage"
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "section-5_primary_title", array(
      "label" => __("Primary Title", "rosa"),
      "section" => "section-5",
      "setting" => "section-5_primary_title",
      "priority" => 2
    )) );

    $wp_customize->add_setting("section-5_secondary_title", array(
      "default" => "Culinary",
      "transport" => "postMessage"
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "section-5_secondary_title", array(
      "label" => __("Secondary Title", "rosa"),
      "section" => "section-5",
      "setting" => "section-5_secondary_title",
      "priority" => 1
    )) );

    $wp_customize->add_setting("section-5_paragraph", array(
      "default" => "We promise an intimate and relaxed dining experience that offers something different to local and foreign patrons and ensures you enjoy a memorable food experience every time.",
      "transport" => "postMessage"
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "section-5_paragraph", array(
      "label" => __("Paragraph", "rosa"),
      "section" => "section-5",
      "setting" => "section-5_paragraph",
      "type" => "textarea",
      "priority" => 3
    )) );

    $wp_customize->add_setting("section-5_img1", array(
      "default" => get_bloginfo("template_directory") . "/img/section_5_img1.jpg",
      "transport" => "postMessage"
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, "section-5_img1", array(
      "label" => __("Image One", "rosa"),
      "section" => "section-5",
      "settings" => "section-5_img1",
      "priority" => 4
      )) );

      $wp_customize->add_setting("section-5_img2", array(
        "default" => get_bloginfo("template_directory") . "/img/section_5_img2.jpg",
        "transport" => "postMessage"
      ));
    
      $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, "section-5_img2", array(
        "label" => __("Image Two", "rosa"),
        "section" => "section-5",
        "settings" => "section-5_img2",
        "priority" => 5
        )) );

      // FOOTER SECTION
      $wp_customize->add_section("footer", array(
        "title" => __("Footer", "rosa")
      ));

      $wp_customize->add_setting("footer-title", array(
        "default" => "about rosa",
        "transport" => "postMessage"
      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, "footer-title", array(
        "label" => __("Title", "rosa"),
        "section" => "footer",
        "settings" => "footer-title"
      )) );

      $wp_customize->add_setting("footer-paragraph", array(
        "default" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia nesciunt reprehenderit possimus saepe sunt dolorem odio labore accusamus, sint tempore.",
        "transport" => "postMessage"
      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, "footer-paragraph", array(
        "label" => __("Paragraph", "rosa"),
        "section" => "footer",
        "settings" => "footer-paragraph",
        "type" => "textarea"
      )) );

      $wp_customize->add_setting("footer-background", array(
        "default" => "#121212",
        "transport" => "postMessage"
      ));

      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, "footer-background", array(
        "label" => __("Background Color", "rosa"),
        "section" => "footer",
        "setting" => "footer-background"
      )));

}
add_action("customize_register", "rosa_customize_register");

function mytheme_customize_css() { ?>
  <style type="text/css">
      .title__primary { color: <?php echo get_theme_mod("color_secondary", "#252525") ?> }
      .title__secondary { color: <?php echo get_theme_mod("color_primary", "#c59d5f"); ?>; }
      .hero {
        background: url(<?php echo get_theme_mod("hero_image", get_bloginfo("template_url") . "/img/hero_image.jpg"); ?>) no-repeat center center / cover; 
      }
      .sec-2-background-img {
        background: url(<?php echo get_theme_mod("section-2_background_image", get_bloginfo("template_url") . "/img/section_2_img.jpg"); ?>) no-repeat center center / cover; 
      }
      .sec-4-background-img {
        background: url(<?php echo get_theme_mod("section-4_background_image", get_bloginfo("template_url") . "/img/section_4_img.jpg"); ?>) no-repeat center center / cover;
      }
      footer {
        background-color: <?php echo get_theme_mod("footer-background"); ?>;
      }
  </style>
<?php
}
add_action( 'wp_head', 'mytheme_customize_css');