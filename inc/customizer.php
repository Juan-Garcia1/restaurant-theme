<?php
// APPEARENCE CUSTOMIZE OPTIONS
  // vocab:
  // 1. Control(UI) - color picker, textarea, ...
  // 2. Settings(Database) - saves/set values into a setting to later get or load a value from a setting
  // 3. Sections(Group) - a group of options. example: Navigation, Widgets, ...
function rosa_customize_register($wp_customize) {
  
  // HERO SECTION
  $wp_customize->add_section("hero", array(
    "title" => __("Hero", "rosa"),
    "priority" => 130
  ));

  $wp_customize->add_setting("hero_greeting", array(
    "default" => "welcome",
    "transport" => "refresh"
  ));

  $wp_customize->add_setting("hero_image", array(
    "default" => get_bloginfo("template_directory") . "/img/hero_image.jpg",
    "transport" => "refresh"
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
  
    // THEME COLORS SECTION
    $wp_customize->add_section("color", array(
      "title" => __("Theme Colors", "rosa")
    ));

    $wp_customize->add_setting("color_primary", array(
      "default" => "#c59d5f",
      "transport" => "refresh"
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, "color_primary", array(
      "label" => __("Primary", "rosa"),
      "section" => "color",
      "setting" => "color_primary"
    )) );

    $wp_customize->add_setting("color_secondary", array(
      "default" => "#252525",
      "transport" => "refresh"
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, "color_secondary", array(
      "label" => __("Secondary", "rosa"),
      "section" => "color",
      "setting" => "color_secondary"
    )) );


    // SECTION 1
    $wp_customize->add_section("section-1", array(
      "title" => __("Section 1", "rosa")
    ));

    $wp_customize->add_setting("section-1_primary_title", array(
      "default" => "our story",
      "transport" => "refresh"
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "section-1_primary_title", array(
      "label" => __("Primary Title", "rosa"),
      "section" => "section-1",
      "setting" => "section-1_primary_title",
      "priority" => 2
    )) );

    $wp_customize->add_setting("section-1_secondary_title", array(
      "default" => "Discover",
      "transport" => "refresh"
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "section-1_secondary_title", array(
      "label" => __("Secondary Title", "rosa"),
      "section" => "section-1",
      "setting" => "section-1_secondary_title",
      "priority" => 1
    )) );

    $wp_customize->add_setting("section-1_paragraph", array(
      "default" => "Rosa is a restaurant, bar and coffee roastery located on a busy corner in Farringdon's Exmouth Market. With glazed frontage on two sides of the building, overlooking the market and bustling London intersection.",
      "transport" => "refresh"
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "section-1_paragraph", array(
      "label" => __("Paragraph", "rosa"),
      "section" => "section-1",
      "setting" => "section-1_paragraph",
      "type" => "textarea",
      "priority" => 3
    )) );
}
add_action("customize_register", "rosa_customize_register");

function mytheme_customize_css() { ?>
  <style type="text/css">
      .title__primary { color: <?php echo get_theme_mod("color_secondary", "#252525") ?> }
      .title__secondary { color: <?php echo get_theme_mod("color_primary", "#c59d5f"); ?>; }
  </style>
<?php
}
add_action( 'wp_head', 'mytheme_customize_css');