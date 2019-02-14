<?php

// LOAD CSS
function rosa_load_stylesheets() {
  wp_register_style("normalize", get_template_directory_uri() . "/inc/normalize.css");
  wp_enqueue_style("normalize");

  wp_register_style("stylesheet", get_template_directory_uri() . "/style.css");
  wp_enqueue_style("stylesheet");
}
add_action("wp_enqueue_scripts", "rosa_load_stylesheets");

// LOAD JAVASCRIPT
function rosa_load_js() {
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
    "primary" => __("Primary Menu", "theme")
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
    "before_widget" => "<div>",
    "after_widger" => "</div>",
    "before_title" => "<h3>",
    "after_title" => "</h3>"
  ));
}
add_action("widgets_init", "rosa_init_widgets");