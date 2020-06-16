<?php

// Theme options
add_theme_support('menus');

// Menus
register_nav_menus(
    array(
        'top-menu' => 'Top Nav',
        'mobile-menu' => 'Mobile Menu Location',
    )
);

/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');
