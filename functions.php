<?php

function htaffinity_load_scripts(){
    wp_enqueue_style( 'htaffinity-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css'), 'all' );
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/assets/js/dropdown.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'htaffinity_load_scripts' );

register_nav_menus(
    array(
        'htaffinity_main_menu' => 'Main Menu',
        'htaffinity_footer_menu' => 'Footer Menu'
    )
);
