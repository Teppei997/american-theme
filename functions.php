<?php
// カスタムヘッダー
$custom_header = array(
    'random-default' => false,
    'width' => 960,
    'height' => 300,
    'flex-height' => true,
    'flex-width' => false,
    'default-text-color' => '',
    'header-text' => false,
    'uploads' => true,
    'default-image' => get_stylesheet_directory_uri() . '/img/default_img.png',
    );
add_theme_support( 'custom-header', $custom_header );


function mytheme_set() {
    add_theme_support( 'title-tag' );
  }
add_action( 'after_setup_theme', 'mytheme_set' );

add_theme_support( 'menus' );


add_theme_support('post-thumbnails');


