<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Code_Starter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">

        <header class="menu">
            <div class="container">
                <a href="./">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/nicole-tomazella.png" class="logo" alt="Nicole Tomazella" />
                </a>

                <div class="menu-link">
                    <div class="redes flex alignCenter">
                        <a href="<?php the_field('instagram_url'); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram.png" alt="instagram" />
                        </a>
                        <a href="<?php the_field('facebook_url'); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook.png" alt="facebook" />
                        </a>
                        <a href="<?php the_field('youtube_url'); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube.png" alt="youtube" />
                        </a>
                    </div>
                    <i class="fa fa-search"></i>
                    <span>MENU</span>
                    <div id="sidebartoggle">
                        <i class="material-icons">menu</i>
                    </div>
                </div>
            </div>
        </header>

        <div id="content" class="site-content">
            