<?php

// Fijar menus de navegacion
function gymfitness_menus()
{
    register_nav_menus([
        'menu-principal' => __('Menu principal', 'gymfitness'),
        'menu-secundario' => __('Menu secundario', 'gymfitness'),
        'menu-mobil' => __('Menu movil', 'gymfitness')
    ]);
}

function gymfitness_scripts_styles()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . "/src/css/normalize.css", [], '8.0.1');
    wp_enqueue_style('gfont_staatliches', 'https://fonts.googleapis.com/css?family=Open+Sans|Staatliches&display=swap', [], '1.0.0');
    wp_enqueue_style('gfont_open_sans', 'https://fonts.googleapis.com/css?family=Open+Sans&display=swap', [], '1.0.0');
    wp_enqueue_style('gfont_raleway', 'https://fonts.googleapis.com/css?family=Raleway&display=swap', [], '1.0.0');
    wp_enqueue_style('slicknavcss', get_template_directory_uri() . "/src/css/slicknav.min.css", [], "1.0.0");
    wp_enqueue_style(
        'style',
        get_stylesheet_uri(),
        ['normalize'],
        '1.0.0'
    );

    wp_enqueue_script('jsjquery', 'https://code.jquery.com/jquery-3.4.1.min.js?ver=3.4.1', [], '3.4.1', true);
    wp_enqueue_script('slicknavjs', get_template_directory_uri() . "/src/js/jquery.slicknav.min.js", ['jsjquery'], '1.0.0', true);
    wp_enqueue_script('mainscript', get_template_directory_uri() . "/src/js/main.js", [], '1.0.0', true);
}

add_action('init', 'gymfitness_menus');
add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');
