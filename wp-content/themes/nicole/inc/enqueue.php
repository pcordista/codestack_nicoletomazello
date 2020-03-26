<?php

function cs_enqueue()
{

    $uri = get_theme_file_uri();

    // Styles
    wp_enqueue_style('cs-materialize', $uri . '/assets/css/materialize.min.css');
    wp_enqueue_style('cs-swiper', $uri . '/assets/css/swiper.min.css');
    wp_enqueue_style('cs-style', $uri . '/assets/css/style.css', []);
    wp_enqueue_style('cs-font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('cs-material-icons', '//fonts.googleapis.com/icon?family=Material+Icons');

    // Scripts
    wp_enqueue_script('cs-jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js', true);
    wp_enqueue_script('cs-materialize-js',  $uri . '/assets/js/materialize.min.js', [], true);
    wp_enqueue_script('cs-swiper-js',  $uri . '/assets/js/swiper.min.js', [], true);
    wp_enqueue_script('cs-app-js',  $uri . '/assets/js/app.js', [], true);
}

add_action('wp_enqueue_scripts', 'cs_enqueue');
