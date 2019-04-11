<?php 
  // logo
  $custom_logo_id = get_theme_mod("custom_logo");
  $logo = wp_get_attachment_image_src($custom_logo_id, "full");
?>

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
  
  <header id="main-header">
    <div class="container">
      <div>
        <?php if(has_custom_logo()) : ?>
          <a id="logo-link" href="<?php echo esc_url(home_url("/")); ?>">
            <img id="logo-img" src="<?php echo esc_url($logo[0]); ?>" />
          </a>
        <?php endif; ?>
        <?php
          wp_nav_menu(array(
            "wp_theme_location" => "primary",
            "container" => "nav"
          ));
        ?>
        <button id="nav-btn">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
      </div>
    </div>
  </header>
  <main>