<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
  <script src="https://unpkg.com/scrollreveal"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=IM+Fell+English+SC&family=IM+Fell+English:ital@0;1&display=swap"
    rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">
</head>

<body <?php body_class(); ?>>
  <div class="frame">
    <div class="body-bg">
      <video autoplay muted loop playsinline>
        <source src="<?php echo get_template_directory_uri(); ?>/assets/video/ashbringermusic-bg.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    <nav id="nav_main">
      <div class="nav-container">
        <div class="nav-bar">
          <a id="logo" href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo_spawn.svg" alt="Ashbringer Logo" />
          </a>
          <div id="nav_toggle" class="hamburger hamburger--stand js-hamburger">
            <div class="hamburger-box">
              <div class="hamburger-inner"></div>
            </div>
          </div>
        </div>
        <div id="nav_links">
          <ul class="nav-list">
            <li>
              <a href="/about/" class="nav-link">
                About
              </a>
            </li>
            <li>
              <a href="/listen/" class="nav-link">
                Listen
              </a>
            </li>
                        <li>
              <a href="/blog/" class="nav-link">
                Blog
              </a>
            </li>
            <li>
              <a href="/events/" class="nav-link">
                Events
              </a>
            </li>
            <li>
              <a href="/contact/" class="nav-link">
                Contact
              </a>
            </li>
            <li>
              <a href="/digital-press-kit/" class="nav-link">
                Digital Press Kit
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>