<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- meta generales -->
    <meta name="author" content="">
    <meta name="category" content="">
    <meta name="Keywords" content="">
    <meta name="description" content="">
  <!-- index -->
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="#">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:card" content="">
    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>

<div class="container-fluid bg-peach">
  <!-- Menu header -->
  <nav class="navbar navbar-expand-md navbar-light" role="navigation">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-menu" aria-controls="#header-menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <?php
            wp_nav_menu(array(
              'theme_location'    => 'header_menu',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'header-menu',
              'menu_class'        => 'nav navbar-nav justify-content-center',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
            ));
        ?>
  </nav>
  <!-- Fin du menu header -->
  <div class="container d-flex flex-column align-items-center position-relative text-grey">
    <img src="<?php bloginfo('template_directory');?>/assets/lauraadrienbanner.png"  alt="illustration florale avec les noms des mariés" class="banner-size">
    <h1 class="banner-text-up mb-0">SE MARIENT LE</h1>
    <h2 class="banner-text-down mb-5 pb-4">10 OCTOBRE 2020</h2>
    <div class="scroll-downs">
      <div class="mousey">
      <div class="scroller"></div>
  </div>
</div>
  </div>


</div> 
