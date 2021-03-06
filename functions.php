<?php

// LOAD CSS
function rosa_load_stylesheets() {
  wp_register_style("normalize", get_template_directory_uri() . "/css/normalize.css");
  wp_enqueue_style("normalize");

  wp_register_style("fonts", "https://fonts.googleapis.com/css?family=Cabin|Herr+Von+Muellerhoff|Source+Sans+Pro:900");
  wp_enqueue_style("fonts");
  
  wp_register_style("stylesheet", get_template_directory_uri() . "/style.css");
  wp_enqueue_style("stylesheet");
}
add_action("wp_enqueue_scripts", "rosa_load_stylesheets");

// LOAD JAVASCRIPT
function rosa_load_js() {
  wp_register_script("jquery-script", "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js", "", 1, true);
  wp_enqueue_script("jquery-script");

  wp_register_script("mainjs", get_template_directory_uri() . "/js/index.js", "", array(), true);
  wp_enqueue_script("mainjs");
}
add_action("wp_enqueue_scripts", "rosa_load_js");

// ADD FEATURED IMAGE SUPPORT
add_theme_support("post-thumbnails");
// ADD MENU SUPPORT
add_theme_support("menus");

register_nav_menus(
  array(
    "primary" => __("Primary Menu", "rosa")
  )
);

// CHANGE EXCERPT LENGTH
function rosa_excerpt_length($length) {
  return 26;
}
add_filter("excerpt_length", "rosa_excerpt_length");

function rosa_excerpt_readmore($more) {
  return "...";
}
add_filter("excerpt_more", "rosa_excerpt_readmore");

// ADD WIDGET LOCATIONS
function rosa_init_widgets() {
  register_sidebar(array(
    "name" => "Sidebar",
    "id" => "sidebar",
    "before_widget" => "<div class='sidebar-widget'>",
    "after_widget" => "</div>",
    "before_title" => "<h3>",
    "after_title" => "</h3>"
  ));
}
add_action("widgets_init", "rosa_init_widgets");

require get_template_directory() . "/inc/customizer.php";

// MAKE CUSTOM CHANGES IN REAL TIME
function rosa_customizer_live_preview() {
  wp_enqueue_script("rosa-themecustomizer", get_template_directory_uri()."/js/theme-customizer.js", array("jquery","customize-preview" ), "", true);
}

// ADD CUSTOM LOGO THEME SUPPORT
function rosa_custom_logo_setup() {
  $defaults = array(
      'height'      => 100,
      'width'       => 250,
      'flex-height' => true,
      'flex-width'  => true
  );
  add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'rosa_custom_logo_setup' );

add_action( 'customize_preview_init', 'rosa_customizer_live_preview' );