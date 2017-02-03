<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Proyecto Xocolate</title>
  </head>
  <body>

<?php

wp_head();
/*
  Header information:
        Nav bar
        Nav Info
        Nav ETC
*/
?>
  <div id="menu-bar">
      <div id="nav-icon3">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
      </div>
    <img id="logo-bara" src="<?php bloginfo('template_url'); ?>/images/logo-bara.png" alt="">
    <img id="logo-cart" src="<?php bloginfo('template_url'); ?>/images/cart.png" alt="">
    <?php
       wp_nav_menu( array(
        'theme_location' => 'header'
    ));
        ?>
  </div>
