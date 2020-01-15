<?php

add_action( 'wp_enqueue_scripts', 'add_aside_styles' );

function add_aside_styles(){
  // enregistrement d'un nouveau style

wp_register_style('googleFonts','https://fonts.googleapis.com/css?family=Work+Sans');
wp_enqueue_style('googleFonts');


wp_register_style("bootstrap", get_template_directory_uri() . '/sources/styles/bootstrap.min.css');
wp_enqueue_style('bootstrap');


wp_register_style("iconic", get_template_directory_uri() . '/sources/styles/open-iconic-bootstrap.min.css');
wp_enqueue_style('iconic');

wp_register_style("owl.carousel", get_template_directory_uri() . '/sources/styles/owl.carousel.min.css');
wp_enqueue_style('owl.carousel');

wp_register_style("owl.theme", get_template_directory_uri() . '/sources/styles/owl.theme.default.min.css');
wp_enqueue_style('owl.theme');

wp_register_style("icomoon", get_template_directory_uri() . '/sources/styles/icomoon.css');
wp_enqueue_style('icomoon');

wp_register_style("animate", get_template_directory_uri() . '/sources/styles/animate.css');
wp_enqueue_style('animate');

wp_register_style( 'main_style', get_template_directory_uri() . '/sources/styles/style.css' );
wp_enqueue_style('main_style');

wp_register_style('ninjaformsperso',get_template_directory_uri() . '/sources/styles/ninjaformsperso.css');
wp_enqueue_style('ninjaformsperso');
}
