<?php

function htaffinity_customizer( $wp_customize ) {
    if ( ! isset( $wp_customize ) ) {
		return;
	}

    // 1 Copyright
    $wp_customize->add_section( 'section_copyright', array(
        'title' => 'Copyright Settings',
        'description' => 'Copyright Settings'
    ) );
    // Description
    $wp_customize->add_setting(
        'setting_copyright',
        array(
            'type' => 'theme_mod',
            'default' => 'Copyright X - All Rights Reserved',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'setting_copyright',
        array(
            'label' => 'Copyright Information',
            'description' => 'Type your copyright here',
            'section' => 'section_copyright',
            'type' => 'text'
        )
    );

    // 2 Hero
    $wp_customize->add_section( 'section_hero', array(
        'title' => 'Hero Settings'
    ) );
    // Title
    $wp_customize->add_setting(
        'setting_hero_title',
        array(
            'type' => 'theme_mod',
            'default' => 'Add Some Title',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'setting_hero_title',
        array(
            'label' => 'Hero Title',
            'description' => 'Type your hero title here',
            'section' => 'section_hero',
            'type' => 'text'
        )
    );
    // Subtitle
    $wp_customize->add_setting(
        'setting_hero_subtitle',
        array(
            'type' => 'theme_mod',
            'default' => 'Add Some Subtitle',
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'setting_hero_subtitle',
        array(
            'label' => 'Hero Subtitle',
            'description' => 'Type your hero subtitle here',
            'section' => 'section_hero',
            'type' => 'textarea'
        )
    );
    // Button Text
    $wp_customize->add_setting(
        'setting_hero_button_text',
        array(
            'type' => 'theme_mod',
            'default' => 'Learn More',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'setting_hero_button_text',
        array(
            'label' => 'Hero Button Text',
            'description' => 'Type your hero button text here',
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
            'label' => 'Hero Button Link',
            'description' => 'Type your hero button link here',
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
            'label' => 'Hero Height',
            'description' => 'Type your hero height here',
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
            'label' => 'Hero Background Image',
            'description' => 'Upload your hero background image here',
            'section' => 'section_hero',
            'mime_type' => 'image'
        )
    ) );
}
add_action( 'customize_register', 'htaffinity_customizer' );
