<?php

function htaffinity_load_scripts(){
    wp_enqueue_style( 'htaffinity-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css'), 'all' );
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/assets/js/dropdown.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'htaffinity_load_scripts' );

function htaffinity_config() {
    register_nav_menus(
        array(
            'htaffinity_main_menu' => 'Main Menu',
            'htaffinity_footer_menu' => 'Footer Menu'
        )
    );

    $args = array(
        'height' => 225,
        'width' => 1920
    );
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array( 
        'height' => 110, 
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true
    ) );
}
add_action( 'after_setup_theme', 'htaffinity_config', 0 );