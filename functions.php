<?php

function rosa_load_stylesheets() {
  wp_register_style("normalize", get_template_directory_uri() . "/inc/normalize.css");
  wp_enqueue_style("normalize");

  wp_register_style("stylesheet", get_template_directory_uri() . "/style.css");
  wp_enqueue_style("stylesheet");
}
add_action("wp_enqueue_scripts", "rosa_load_stylesheets");

function rosa_load_js() {
  wp_register_script("mainjs", get_template_directory_uri() . "/js/index.js", "", array(), true);
  wp_enqueue_script("mainjs");
}
add_action("wp_enqueue_scripts", "rosa_load_js");