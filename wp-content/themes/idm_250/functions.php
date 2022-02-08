<?php

function include_styles() {
    wp_enqueue_style('idm250-css', get_template_directory_uri() . '/dist/styles/main.css');
}

add_action('wp_enqueue_scripts', 'include_styles');

function include_js_files() {
    wp_enqueue_script('idm250-js', get_template_directory_uri() . '/dist/scripts/main.js', [], false, true);
}

add_action('wp_enqueue_scripts', 'include_js_files');

function register_theme_navigation() {
    register_nav_menus([
        'primary_menu' => 'Primary Menu',
        'footer_menu' => 'Footer Menu',
    ]);
}

add_action('after_setup_theme', 'register_theme_navigation');