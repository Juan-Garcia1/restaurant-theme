<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo(); ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  
  <header>
    <?php
      wp_nav_menu(array(
        "wp_theme_location" => "primary",
        "container" => "nav"
      ));
    ?>
  </header>
  <main>