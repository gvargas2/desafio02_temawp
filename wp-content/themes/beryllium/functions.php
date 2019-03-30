<?php

// Registro de Estilos

function register_enqueue_style() {
  $theme_data = wp_get_theme();

  /*Registrando estilos*/
  wp_register_style('googlefonts',
  'https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700');
  wp_register_style('animate',
  get_parent_theme_file_uri('/css/animate.css'));
  wp_register_style('icomoon',
  get_parent_theme_file_uri('/css/icomoon.css'));
  wp_register_style('themify-icons',
  get_parent_theme_file_uri('/css/themify-icons'));
  wp_register_style('bootstrap',
  get_parent_theme_file_uri('css/bootstrap.css'));
  wp_register_style('owl',
  get_parent_theme_file_uri('/css/owl.carousel.min.css'));
  wp_register_style('owl_theme',
  get_parent_theme_file_uri('/css/owl.theme.default.min.css'));
  wp_register_style('styles',
  get_parent_theme_file_uri('/css/styles.css'));

  /* Enqueue estilos */
  wp_enqueue_style('googlefonts');
  wp_enqueue_style('animate');
  wp_enqueue_style('icomoon');
  wp_enqueue_style('themify-icons');
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('owl');
  wp_enqueue_style('owl_theme');
  wp_enqueue_style('styles');

}

add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );

// Registro de Scripts

function register_enqueue_scripts() {
  $theme_data = wp_get_theme();

  /*Desregistrando*/
  wp_deregister_script('jquery');
  wp_deregister_script('jquery-migrate');

  /*Resgistrando Scripts*/
  wp_register_script('modernizr',
  get_parent_theme_file_uri('/js/modernizr-2.6.2.min.js'));
  wp_register_script('jquery',
  get_parent_theme_file_uri('/js/jquery.min.js'));
  wp_register_script('jquery_easing',
  get_parent_theme_file_uri('/js/jquery.easing.1.3.js'));
  wp_register_script('bootstrap_js',
  get_parent_theme_file_uri('/js/bootstrap.min.js'));
  wp_register_script('jquery_way',
  get_parent_theme_file_uri('/js/jquery.waypoints.min.js'));
  wp_register_script('owl_js',
  get_parent_theme_file_uri('/js/owl.carousel.min.js'));
  wp_register_script('main',
  get_parent_theme_file_uri('/js/main.js'));


  /*Enqueue Scripts*/
  wp_enqueue_script('modernizr');
  wp_enqueue_script('jquery');
  wp_enqueue_script('jquery_easing');
  wp_enqueue_script('bootstrap_js');
  wp_enqueue_script('jquery_way');
  wp_enqueue_script('owl_js');
  wp_enqueue_script('main');
}

add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' )
?>
