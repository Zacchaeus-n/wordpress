<?php
add_action('wp_enqueue_scripts', 'blankslate_enqueue');
add_action('init', 'register_my_menus');

function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'extra-menu' => __('Extra Menu')
        )
    );
}

function blankslate_enqueue()
{
    wp_register_style("custom", get_template_directory_uri() . "/css/custom.css", '', '1.0.0');
    wp_enqueue_style('blankslate-style', get_stylesheet_uri());
    wp_enqueue_style('custom');
    wp_enqueue_script('jquery');
}