<?php

function register_my_menus() {
    register_nav_menus( array(
      'header-menu' => __( 'Top' ),
      'footer' => __('Footer'),
      'contact' => __('Contact')
    ));
  }
  add_action( 'init', 'register_my_menus' );

function load_stylesheets() {

      wp_register_style('stylesheet', get_stylesheet_directory_uri() . '/style.css');
      wp_enqueue_style('stylesheet');

      wp_register_style('fontello', get_stylesheet_directory_uri() . '/css/fontello.css');
      wp_enqueue_style('fontello');

  }
  add_action('wp_enqueue_scripts', 'load_stylesheets');

function loadjs() {
      wp_register_script('customjs', get_template_directory_uri() . '/main.js', '', 1, true);
      wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs')



  ?>