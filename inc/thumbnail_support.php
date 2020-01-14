<?php

add_action( 'after_setup_theme', 'thumbnails_theme_support' );
function thumbnails_theme_support(){
    add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'add_aside_thumbnails_format');
function add_aside_thumbnails_format(){
  add_image_size('home_thumbnail','550','99999',false);

  add_image_size('single_thumbnail','860','575',true);
}
