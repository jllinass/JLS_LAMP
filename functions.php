<?php 


function jls_add_theme_scripts(){
    wp_enqueue_style ( 'style', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style ( 'bootstrap_css', get_stylesheet_directory_uri(). '/helpers/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_script ( 'bootstrap_js', get_stylesheet_directory_uri(). '/helpers/bootstrap/css/bootstrap.min.js' );
}

add_action('wp_enqueue_scripts', 'jls_add_theme_scripts');

function jls_register_my_menu(){
    register_nav_menu( 'primary', __('Menú de la capçalera'));
}

add_action( 'init', 'jls_register_my_menu');