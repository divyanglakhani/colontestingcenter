<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Colon_Testing_Center
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- -------bootsrap CSS------------- -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" />
  <!-- --font---------- -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap"
    rel="stylesheet">
  <!-- ------------------font awesome------------------------- -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <!-- ----slick slider---- -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
  <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fontawesome.css"> -->

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text"
      href="#primary"><?php esc_html_e('Skip to content', 'colon-testing-center'); ?></a>
    <header id="master_head">
      <div class="header-top d-none d-lg-block">
        <?php
      $header = get_field('top_header_url', 'option');
      ?>
        <div class="container">
          <div class="top_info">
            <div class="top_right">
              <ul class="top_navigation">
                <li><a href="<?php echo $header['top_header_url1']; ?>"><?php echo $header['top_header_button1']; ?></a>
                </li>
                <li><a href="<?php echo $header['top_header_url2']; ?>"><?php echo $header['top_header_button2']; ?></a>
                </li>
                <li><a href="<?php echo $header['top_header_url3']; ?>"><?php echo $header['top_header_button3']; ?></a>
                </li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/globe.png"
                      class="img-fluid"><?php echo $header['top_header_button4']; ?></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="header-bottom">
        <b class="screen-overlay"></b>
        <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-light">
          <div class="container nav-cont">
            <a class="navbar-brand d-none d-lg-block bottom_left" href="<?php echo home_url(); ?>">
              <?php
              $logo_image = get_field('logo_image', 'option');
              if (!empty($logo_image)) : ?>
              <img src="<?php echo esc_url($logo_image['url']); ?>" class="logo-image"
                alt="<?php echo esc_attr($logo_image['alt']); ?>" />
              <?php endif; ?> </a>
            <div class="offcanvas-header d-lg-none">
              <button class="navbar-toggler btn-close"></button>
            </div>

            <nav class="header-menu">
              <?php
              wp_nav_menu(array('theme_location' => 'menu-1'));
              ?>
            </nav>
            <div class="bottom_right d-flex">
              <a class="search_icon"><i class="fa fa-search"></i></a>
              <div style="display:none;" class="spicewpsearchform"><?php echo get_search_form(false) ?></div>             
              <a href="<?php echo get_field('button_url', 'option'); ?>"
                class="theme-btn"><?php echo get_field('button_header', 'option'); ?></a>
            </div>
          </div>
        </nav>
        <nav class="mobile-navbar navbar d-lg-none navbar-expand-lg navbar-light">
          <div class="container">
            <a class="navbar-brand" href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
            </a>
            <a class="search_icon1"><i class="fa fa-search"></i></a>
              <div style="display:none;" class="spicewpsearchform"><?php echo get_search_form(false) ?></div>   
            <button data-trigger="#navbar_main" class="navbar-toggler" type="button">
              <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
          </div>
        </nav>
      </div>

    </header>