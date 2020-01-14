<?php

add_action('wp_enqueue_scripts','add_aside_scripts');
function add_aside_scripts()
{


  wp_register_script('jquery.3.2', get_template_directory_uri() . '/sources/scripts/jquery-3.2.1.slim.min.js', array(),'1', true);
  wp_enqueue_script('jquery.3.2');

  wp_register_script('popper', get_template_directory_uri() . '/sources/scripts/popper.min.js', array(),'1', true);
  wp_enqueue_script('popper');

  wp_register_script('bootstrap.min', get_template_directory_uri() . '/sources/scripts/bootstrap.min.js', array(),'1', true);
  wp_enqueue_script('bootstrap');

  wp_register_script('owl.carousel', get_template_directory_uri() . '/sources/scripts/owl.carousel.min.js', array(),'1', true);
  wp_enqueue_script('owl.carousel');

  wp_register_script('jquery.waypoints', get_template_directory_uri() . '/sources/scripts/jquery.waypoints.min.js', array(),'1', true);
  wp_enqueue_script('jquery.waypoints');

  wp_register_script('imagesloaded', get_template_directory_uri() . '/sources/scripts/imagesloaded.pkgd.min.js', array(),'1', true);
  wp_enqueue_script('imagesloaded');

  wp_register_script('main', get_template_directory_uri() . '/sources/scripts/main.js', array(),'1', true);
  wp_enqueue_script('main');
}
