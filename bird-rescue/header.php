<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NZ Bird Rescue Charity Trust</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@700;900&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?php wp_head();?>
</head>


<body <?php body_class();?>>

    <header style="background-color: whitesmoke;">


        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="logo navbar-brand"><?php the_custom_logo();?></div>

            <div class="menu-con">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
wp_nav_menu(array(
    'theme_location' => 'top-menu',
    'depth' => 2,
    'container' => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id' => 'navbarSupportedContent',
    'menu_class' => ' navbar-nav mr-auto',
    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
    'walker' => new WP_Bootstrap_Navwalker(),
));
?>
            </div>


        </nav>
        <div class="header-banner">
            <div class="header-shape-1"></div>
            <div class="header-shape-2"></div>

            <div class="header-image" style="background-image:linear-gradient(107.99deg, rgba(33, 147, 176, 0.3) 20%,
    rgba(33, 147, 176, 0.3) 50%), url(<?php echo get_theme_mod('header_image') ?>)">
                <h1 class="header-text"><?php echo get_theme_mod('text_heading'); ?></h1>

                <a href="/campaigns/bird-rescue-donation/" class="btn btn-primary donate-btn p3">DONATE</a>

            </div>

        </div>






    </header>