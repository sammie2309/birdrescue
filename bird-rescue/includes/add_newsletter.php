<?php
function add_newsletters()
{
    $args = array(
        'labels' => array(
            'name' => 'Newsletters',
            'singular_name' => 'Newsletter',
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-multisite',
        'supports' => array('title', 'editor', 'thumbnail', 'template'),
        'show_in_nav_menus' => true,
    );

    register_post_type('newsletters', $args);
}

add_action('init', 'add_newsletters');