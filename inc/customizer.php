<?php

function htaffinity_customizer( $wp_customize ) {
    if ( ! isset( $wp_customize ) ) {
		return;
	}

    // 1 Copyright
    $wp_customize->add_section( 'section_copyright', array(
        'title' => __( 'Copyright Settings', 'ht-affinity' ),
        'description' => __( 'Copyright Settings', 'ht-affinity' )
    ) );
    // Description
    $wp_customize->add_setting(
        'setting_copyright',
        array(
            'type' => 'theme_mod',
            'default' => __( 'Copyright X - All Rights Reserved', 'ht-affinity' ),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'setting_copyright',
        array(
            'label' => __( 'Copyright Information', 'ht-affinity' ),
            'description' => __( 'Type your copyright here', 'ht-affinity' ),
            'section' => 'section_copyright',
            'type' => 'text'
        )
    );

    // 2 Hero
    $wp_customize->add_section( 'section_hero', array(
        'title' => __( 'Hero Settings', 'ht-affinity' )
    ) );
    // Title
    $wp_customize->add_setting(
        'setting_hero_title',
        array(
            'type' => __( 'theme_mod', 'ht-affinity' ),
            'default' => 'Add Some Title',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'setting_hero_title',
        array(
            'label' => __( 'Hero Title', 'ht-affinity' ),
            'description' => __( 'Type your hero title here', 'ht-affinity' ),
            'section' => 'section_hero',
            'type' => 'text'
        )
    );
    // Subtitle
    $wp_customize->add_setting(
        'setting_hero_subtitle',
        array(
            'type' => 'theme_mod',
            'default' => __( 'Add Some Subtitle', 'ht-affinity' ),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'setting_hero_subtitle',
        array(
            'label' => __( 'Hero Subtitle', 'ht-affinity' ),
            'description' => __( 'Type your hero subtitle here', 'ht-affinity' ),
            'section' => 'section_hero',
            'type' => 'textarea'
        )
    );
    // Button Text
    $wp_customize->add_setting(
        'setting_hero_button_text',
        array(
            'type' => 'theme_mod',
            'default' => __( 'Learn More', 'ht-affinity' ),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'setting_hero_button_text',
        array(
            'label' => __( 'Hero Button Text', 'ht-affinity' ),
            'description' => __( 'Type your hero button text here', 'ht-affinity' ),
            'section' => 'section_hero',
            'type' => 'text'
        )
    );
    // Button Link
    $wp_customize->add_setting(
        'setting_hero_button_link',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_control(
        'setting_hero_button_link',
        array(
            'label' => __( 'Hero Button Link', 'ht-affinity' ),
            'description' => __( 'Type your hero button link here', 'ht-affinity' ),
            'section' => 'section_hero',
            'type' => 'url'
        )
    );
    // Hero Height
    $wp_customize->add_setting(
        'setting_hero_height',
        array(
            'type' => 'theme_mod',
            'default' => 800,
            'sanitize_callback' => 'absint'
        )
    );
    $wp_customize->add_control(
        'setting_hero_height',
        array(
            'label' => __( 'Hero Height', 'ht-affinity' ),
            'description' => __( 'Type your hero height here', 'ht-affinity' ),
            'section' => 'section_hero',
            'type' => 'number'
        )
    );
    // Hero Background Image
    $wp_customize->add_setting(
        'setting_hero_background_image',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );
    $wp_customize->add_control( new WP_Customize_Media_Control(
        $wp_customize,
        'setting_hero_background_image',
        array(
            'label' => __( 'Hero Background Image', 'ht-affinity' ),
            'description' => __( 'Upload your hero background image here', 'ht-affinity' ),
            'section' => 'section_hero',
            'mime_type' => 'image'
        )
    ) );

    // 3. Blog
	$wp_customize->add_section( 
        'section_blog', 
        array(
		    'title' => __( 'Blog Section', 'ht-affinity' )
	) );
    // Posts per page
    $wp_customize->add_setting( 
        'setting_per_page', 
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
    ) );
    $wp_customize->add_control( 
        'setting_per_page', 
        array(
            'label' => __( 'Posts per page', 'ht-affinity' ),
            'description' => __( 'How many items to display in the post list?', 'ht-affinity' ),			
            'section' => 'section_blog',
            'type' => 'number'
    ) );
    // Post categories to include
    $wp_customize->add_setting( 
        'setting_category_include', 
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
    ) );
    $wp_customize->add_control( 
        'setting_category_include', 
        array(
            'label' => __( 'Post categories to include', 'ht-affinity' ),
            'description' => __( 'Comma separated values or single category ID', 'ht-affinity' ),
            'section' => 'section_blog',
            'type' => 'text'
    ) );	
    // Post categories to exclude
    $wp_customize->add_setting( 
        'setting_category_exclude', 
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
    ) );
    $wp_customize->add_control( 
        'setting_category_exclude', 
        array(
            'label' => __( 'Post categories to exclude', 'ht-affinity' ),
            'description' => __( 'Comma separated values or single category ID', 'ht-affinity' ),			
            'section' => 'section_blog',
            'type' => 'text'
    ) );
}
add_action( 'customize_register', 'htaffinity_customizer' );
