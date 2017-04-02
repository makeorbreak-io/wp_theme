<?php
function psc_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'psc_scripts' );

// enable custom header
$args = array('uploads' => true);
add_theme_support( 'custom-header', $args );
add_theme_support( 'post-thumbnails' );

register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ));
