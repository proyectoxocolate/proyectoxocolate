<?php


function proyectoxocolate_theme_setup() {
  register_nav_menus( array(
    'header' => 'Header menu',
    'footer' => 'Footer menu'
  ) );
 }

 add_action( 'after_setup_theme', 'proyectoxocolate_theme_setup' );


 /**
  * Register style sheet.
  */
  function load_theme_styles() {
      wp_register_style('bar-css', get_template_directory_uri() . '/css/bar-css.css', array(), '1.0', 'all');
      wp_enqueue_style( 'bar-css', get_stylesheet_uri() );
          wp_enqueue_style( 'style', get_stylesheet_uri() );
           wp_enqueue_script( 'javascript', get_template_directory_uri() . '/js/javascript.js', array(), '1.0.0', true );
      wp_enqueue_script( 'jquery' );
  }
  add_action('wp_enqueue_scripts', 'load_theme_styles');
