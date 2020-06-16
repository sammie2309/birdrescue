<?php

// Load css
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('typography', get_template_directory_uri() . '/css/typography.css', array(), false, 'all');
    wp_enqueue_style('typography');

    wp_register_style('header', get_template_directory_uri() . '/css/header.css', array(), false, 'all');
    wp_enqueue_style('header');

    wp_register_style('footer', get_template_directory_uri() . '/css/footer.css', array(), false, 'all');
    wp_enqueue_style('footer');

    wp_register_style('front-page', get_template_directory_uri() . '/css/front-page.css', array(), false, 'all');
    wp_enqueue_style('front-page');

    wp_register_style('donation', get_template_directory_uri() . '/css/donation.css', array(), false, 'all');
    wp_enqueue_style('donation');

    wp_register_style('contact', get_template_directory_uri() . '/css/contact.css', array(), false, 'all');
    wp_enqueue_style('contact');

    wp_register_style('general', get_template_directory_uri() . '/css/general.css', array(), false, 'all');
    wp_enqueue_style('general');
}

add_action('wp_enqueue_scripts', 'load_css');