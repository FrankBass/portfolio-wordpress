<?php


add_action('wp_enqueue_scripts','my_theme_enqueue_styles');
function my_theme_enqueue_styles() {
  wp_enqueue_style('child-style', get_stylesheet_uri() );
}

add_theme_support('post-thumbnails');

function enregistre_mon_menu() {
   register_nav_menu( 'menu_principal', ( 'Menu principal' ) );
}
add_action( 'init', 'enregistre_mon_menu' );
