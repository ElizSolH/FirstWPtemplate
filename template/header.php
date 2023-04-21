<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Asap+Condensed:ital,wght@0,400;0,600;1,400&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Asap+Condensed:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/light-box.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.min.css">
  <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/fontawesome.js"></script>
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/identity/OM1.png" sizes="16x16">
  <title><?php if(is_home()){
      echo get_bloginfo('name');
  } else if(is_single){
      echo the_title();
  } else{
    echo get_bloginfo('name');
  }?></title>
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <nav>
      <div class="logo">
        <a href="<?php bloginfo('url'); ?>/">
          <img alt="logo" id="Logo" class="img-fluid" src="<?php 
          //Verificar que exista compatibilidad con logos personaliazados
            if( function_exists( 'the_custom_logo' ) ) {
          //Verificar que esté configurado el logo en el personalizador de WordPress
            if(has_custom_logo()) {
          //Si está configurado, mostrar logo personalizado
            the_custom_logo();
            }
          // Sino, mostrar el logo predeterminado.
          else {
            echo get_template_directory_uri().'/img/identity/logos-para-empresas.png';
          }
        } 
        ?>" />
        </a>
      </div>
      <div class="menu-icon">
        <span></span>
      </div>
    </nav>
  </header>