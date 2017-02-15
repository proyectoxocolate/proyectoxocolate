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
  function register_more_stylesheets() {
    wp_register_style( 'stylesheet_name', get_stylesheet_directory_uri() . '/stylesheet.css' );
         wp_register_style( 'homepage', get_stylesheet_directory_uri() . '/css/homepage.css' );
        wp_register_style('bar-css', get_template_directory_uri() . '/css/bar-css.css', array(), '1.0', 'all');
        wp_register_script( 'frontpage', get_template_directory_uri() . '/js/frontpage.js', array ( 'jquery' ), 1.1, true);
}

  function load_theme_styles() {
    if (is_home() || is_front_page() ){
              wp_enqueue_style( 'homepage' );  // no brackets needed for one line and no else
              wp_enqueue_script( 'frontpage' );
    }
      wp_enqueue_style( 'bar-css', get_stylesheet_uri() );
          wp_enqueue_style( 'style', get_stylesheet_uri() );
   wp_enqueue_script( 'javascript', get_template_directory_uri() . '/js/javascript.js', array(), '1.0.0', true );
      wp_enqueue_script( 'jquery' );
  }


function add_my_stylesheet() {
    if ( is_page('products-services') ) // using page slug
    wp_enqueue_style( 'stylesheet_name' );  // no brackets needed for one line and no else
}
add_action( 'init', 'register_more_stylesheets' ); // should I use wp_print_styles hook instead?
  add_action('wp_enqueue_scripts', 'load_theme_styles');
