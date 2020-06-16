<?php

function custom_logo()
{
    $defaults = array(
        'height' => 60,
        'width' => 60,
        'flex-height' => false,
        'flex-width' => false,
    );

    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'custom_logo');