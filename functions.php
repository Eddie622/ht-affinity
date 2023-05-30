<?php

require get_template_directory() . '/inc/customizer.php';

function htaffinity_load_scripts(){
    wp_enqueue_style( 'htaffinity-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css'), 'all' );
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/assets/js/dropdown.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'htaffinity_load_scripts' );

function htaffinity_config() {
    $textdomain = 'ht-affinity';
    load_theme_textdomain( $textdomain, get_template_directory() . '/languages');

    register_nav_menus(
        array(
            'htaffinity_main_menu' => esc_html__( 'Main Menu', 'ht-affinity' ),
            'htaffinity_footer_menu' => esc_html__( 'Footer Menu', 'ht-affinity' )
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
    add_theme_support( 'automatic-feed-links');
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'htaffinity_config', 0 );

function htaffinity_sidebars() {
    register_sidebar(
        array(
            'name' => esc_html__( 'Blog Sidebar', 'ht-affinity' ),
            'id' => 'sidebar-blog',
            'description' => esc_html__('This is the Blog Sidebar. You can add widgets here.', 'ht-affinity'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__( 'Service 1', 'ht-affinity' ),
            'id' => 'services-1',
            'description' => esc_html__( 'First Service Area.', 'ht-affinity' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__( 'Service 2', 'ht-affinity' ),
            'id' => 'services-2',
            'description' => esc_html__( 'Second Service Area.', 'ht-affinity' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__( 'Service 3', 'ht-affinity' ),
            'id' => 'services-3',
            'description' => esc_html__( 'Third Service Area.', 'ht-affinity' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
}
add_action( 'widgets_init', 'htaffinity_sidebars' );

if ( ! function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}
