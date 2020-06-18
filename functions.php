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

register_nav_menu( 'header-navi', 'ヘッダーナビ' );

/* css & js 読み込み */
function my_scripts() {
  wp_enqueue_style( 'my-drawer-style', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/css/drawer.min.css', array(), '3.2.1' );
  wp_enqueue_style( 'my-font-awesome-style', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
  wp_enqueue_script( 'my-scroll-js', 'https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js', array( 'jquery' ), '5.1.3', true );
  wp_enqueue_script( 'my-drawer-js', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/js/drawer.min.js', array( 'my-scroll-js' ), '3.2.1', true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

/* メニューの位置設定 */
function register_my_menu() {
  register_nav_menu( 'my-drawer', 'ドロワーメニュー' );
}
add_action( 'after_setup_theme', 'register_my_menu' );
