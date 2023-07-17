<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/css/main.css', array(), filemtime(get_stylesheet_directory() . '/css/main.css'));
    
}
function enqueue_swiper_js() {
    wp_enqueue_script( 'swiper-js', get_stylesheet_directory_uri() . '/node_modules/swiper/swiper.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_swiper_js' );

//swiper js
 function enqueue_swiper_scripts() {
     // Enqueue Swiper.js JS from CDN
    
    // Enqueue Swiper JS

    wp_enqueue_script( 'swiper-animation', get_stylesheet_directory_uri() . '/js/swiper.js', array( 'jquery' ), '1.0', true ); }
    add_action( 'wp_enqueue_scripts', 'enqueue_swiper_scripts' );

// charge le fichier js
function enqueue_animations_js() {
    wp_enqueue_script( 'animations_js', get_stylesheet_directory_uri() . '/js/animations.js', array(), '1.1', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_animations_js' );




   

  
add_action( 'wp_enqueue_scripts', 'enqueue_swiper_scripts' );
// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}