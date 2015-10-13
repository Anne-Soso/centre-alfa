<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <?php wp_head();?>
  </head>
  <body>
    <?php wp_nav_menu(array(
      'theme_location' => 'header-menu',
      'container'=>'nav'
    ) ); ?>
