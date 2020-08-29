<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-176422121-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-176422121-2');
    </script>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>E-SHOP | Beach Academy Viktoria Brno</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="E-shop beachvolejbalového klubu Beach Academy Viktoria Brno. Můžete si zde zakoupit permanentky, klubové i beachvolejbalové oblečení či zaplatit kempy.">
    <meta name="author" content="Lukáš Prokop">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <?php wp_head(); ?>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/icons/site.webmanifest">
    
    <!-- redirect from shop page -->
    <script>
      const urlpath = window.location.pathname;
      if (urlpath.includes('obchod') && !urlpath.includes('obchodni')) {
        window.location = "/";
      }
    </script>
	  
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1990 12:00:00 GMT" />

  </head>
  <body <?php body_class(); ?>>

    <!-- wrapper -->
    <div class="wrapper">

      <!-- header -->
      <header class="header clear" role="banner">

      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a id="link-on-club-homepage" class="nav-link" href="http://beachacademy.cz">Web klubu BAVB</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">Úvodní stránka</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dokumenty
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/obchodni-podminky/">Obchodní podmínky</a>
                <a class="dropdown-item" href="/doprava-a-platba/">Doprava a platba</a>
                <a class="dropdown-item" href="/reklamacni-rad/">Reklamační řád</a>
                <a class="dropdown-item" href="/ochrana-osobnich-udaju/">Ochrana osobních údajů</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/kontakt/">Kontakt</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/muj-ucet/">Můj účet</a>
            </li>
          </ul>
          <div class="btn btn-light my-2 my-lg-0">
            <?php
              wp_nav_menu( array( 
                'theme_location' => 'my-custom-menu', 
                'container_class' => 'custom-menu-class' ) ); 
            ?>
          </div>
        </div>
      </nav>

      <!-- logo -->
      <div class="logo">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-wood.png" alt="Logo" class="logo-img">
        </a>
      </div>
      <!-- /logo -->

      <div class="web-name">
        <a href="/"><h1>E-SHOP</h1></a>
      </div>
      


      </header>
      <!-- /header -->
