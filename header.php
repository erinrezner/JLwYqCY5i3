<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <?php if (is_singular( 'jetpack-portfolio' )) { ?>
        <style>
          .menu-item-138 a {
            color: #ed413d !important;
            text-decoration: underline !important;
          }
        </style>
    <?php } ?>
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>

  <body>

    <div id="sharinglogo">
      <img src="<?php bloginfo('url') ?>"><img src="<?php bloginfo('stylesheet_directory') ?>/images/header_logo.png">
    </div>

    <div id="pagecontent" class="aligncenter">

    <section id="mainheader">
      <div class="innercontainer">
        <header id="headercolumns">
          <div id="headercolumn1" class="headercolumn">
            <hgroup class="headercolumncontent">
              <a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('stylesheet_directory') ?>/images/header_logo.png" /></a>
              <h1><?php bloginfo( 'name' ); ?></h1>
              <h2><?php bloginfo( 'description' ); ?></h2>
            </hgroup>
          </div>
          <div id="headercolumn2" class="headercolumn">
            <nav class="headercolumncontent">
              <?php
                $divider = '<div class="nav-divider"> / </div>';
                wp_nav_menu(array(
                  'menu' => 'primary',
                  'depth' => 1,
                  'link_after' => $divider,
                  'container_class' => 'main-menu'
                ) );
                ?>
            </nav>
          </div>
          <div style="clear:both;"></div>
        </header>
      </div>
    </section>