<?php

// Header Image
function banner_image($wp_customize)
{

    $wp_customize->add_section('header image', array(
        'title' => 'Header Image',

    ));
    $wp_customize->add_setting('header_image', array(
        'default' => '',
        'transport' => 'refresh',

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_image', array(
        'label' => 'Update Header Image',
        'section' => 'header image',
        'settings' => 'header_image',

    )));

}

add_action("customize_register", "banner_image");

// Header Image
function section_image($wp_customize)
{

    $wp_customize->add_section('section image', array(
        'title' => 'Section Image',

    ));
    $wp_customize->add_setting('section_image', array(
        'default' => '',
        'transport' => 'refresh',

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_image', array(
        'label' => 'Update Section Image',
        'section' => 'section image',
        'settings' => 'section_image',

    )));

}

add_action("customize_register", "section_image");

//Header content

function theme_header_customizer($wp_customize)
{
    //adding section in wordpress customizer
    $wp_customize->add_section('header_settings_section', array(
        'title' => 'Header Text Section',
    ));
//adding setting for footer text area
    $wp_customize->add_setting('text_heading', array(
        'default' => 'Default Text For Header Section',
    ));
    $wp_customize->add_control('text_heading', array(
        'label' => 'Header Text Here',
        'section' => 'header_settings_section',
        'type' => 'textarea',
    ));}

add_action('customize_register', 'theme_header_customizer');

// Footer Image
function footer_image($wp_customize)
{

    $wp_customize->add_section('footer image', array(
        'title' => 'Footer Image',

    ));
    $wp_customize->add_setting('footer_image', array(
        'default' => '',
        'transport' => 'refresh',

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_image', array(
        'label' => 'Update Footer Image',
        'section' => 'footer image',
        'settings' => 'footer_image',

    )));

}

add_action("customize_register", "footer_image");

//Footer content

function theme_footer_customizer($wp_customize)
{
    //adding section in wordpress customizer
    $wp_customize->add_section('footer_settings_section', array(
        'title' => 'Footer Text Section',
    ));
    $wp_customize->add_setting('footer_text', array(
        'default' => 'Default Text For Footer Section',
    ));
    $wp_customize->add_control('footer_text', array(
        'label' => 'Footer Text Here',
        'section' => 'footer_settings_section',
        'type' => 'textarea',
    ));}

add_action('customize_register', 'theme_footer_customizer');

function footer_quote($wp_customize)
{
    //adding section in wordpress customizer
    $wp_customize->add_section('footer_quote', array(
        'title' => 'Footer Quote Section',
    ));
    $wp_customize->add_setting('footer_quote', array(
        'default' => 'Default Text For Footer Section',
    ));
    $wp_customize->add_control('footer_quote', array(
        'label' => 'Footer Quote Text Here',
        'section' => 'footer_quote',
        'type' => 'textarea',
    ));}

add_action('customize_register', 'footer_quote');