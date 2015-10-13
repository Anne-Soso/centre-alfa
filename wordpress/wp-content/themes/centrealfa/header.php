<!DOCTYPE html>
<html lang="<?php bloginfo('language');?>">
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="description" content="<?php bloginfo('description');?>">
    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" media="screen" charset="utf-8">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="page-head">
      <div class="wrapper">
        <nav class="site-nav">
          <h2 role="heading" aria-level="2" class="hidden-title">Navigation du Site</h2>
          <a href="<?php bloginfo('url');?>" class="site-nav__home"><?php include('logo.svg');?></a>
          <?php wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'container'=>' ',
            'menu_class'=> 'float-right',
          ) ); ?>
        </nav>
      </div>
    </div>
