<!DOCTYPE HTML>
<html>
<head>
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<noscript>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/5grid/core.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/5grid/core-desktop.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/5grid/core-1200px.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/5grid/core-noscript.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-desktop.css" />
</noscript>
<script src="<?php echo get_template_directory_uri(); ?>/css/5grid/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
<!--[if IE 9]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>css/style-ie9.css" /><![endif]-->

</head><body <?php body_class($class); ?>>
<div id="wrapper">
  <div id="header-wrapper">
    <header id="header">
      <div class="5grid-layout">
        <div class="row">
          <div class="12u" id="logo"> <!-- Logo -->
            <h1><a href="<?php bloginfo('siteurl');?>/" title="<?php bloginfo('name');?>"><?php bloginfo('name');?></a></h1>
          </div>
        </div>
      </div>
      <div class="5grid-layout">
        <div class="row">
          <div class="12u" id="menu">
            <div id="menu-wrapper">
              <nav class="mobileUI-site-nav">
                  <?php /* Dynamic menu if available */
                  if ( !function_exists('wp_nav_menu')) {
                      $args = array(
                        'depth'       => 1,
                        'show_home'   => true);
                        wp_page_menu($args);
                    } else {
                      wp_nav_menu( array( 'theme_location' => 'main','fallback_cb'=> 'fallbackmenu' ) ); 
                    }
                  ?>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
  </div>
  <div id="page-wrapper" class="5grid-layout">
    <div class="5grid-layout">
      <div class="row">
        <div class="12u">
          <div id="banner">
            <a href="<?php bloginfo('siteurl');?>/" title="<?php bloginfo('name');?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a>
            <?php 
              $ban = get_option('telerik_banner2'); 
              $url = get_option('telerik_url2'); 
              $lab = get_option('telerik_lab2'); 
              $alt = get_option('telerik_alt2');
              if($ban != "" && $url != "" && $lab != "" && $alt != "") {
            ?>
            <a href="<?php echo ($url); ?>" title="<?php echo ($lab); ?>" id="main-banner"><img src="<?php echo ($ban); ?>" alt="<?php echo ($alt); ?>" /></a>
          <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <div class="5grid-layout">
      <div class="row">    