<?php
function psc_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

function theme_slug_setup() {
    add_theme_support( 'title-tag' );
}

function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}

add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

add_action( 'wp_enqueue_scripts', 'psc_scripts' );
add_action( 'after_setup_theme', 'theme_slug_setup' );

// enable custom header
$args = array('uploads' => true);
add_theme_support( 'custom-header', $args );
add_theme_support( 'post-thumbnails' );

register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ));
