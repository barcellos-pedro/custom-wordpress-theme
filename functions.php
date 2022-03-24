<?php

/**
 * Configure features for your theme 
 * - Site Title,
 * - Logo image
 * - Post thumbnail
 */
function app_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

/**
 * Order Posts from the latest
 */
function app_order_posts_by_date($query) {
    if ($query->is_home() && $query->is_main_query()) {
        $query->set('orderby', 'post_date');
        $query->set('order', 'DESC');
    }
}

/**
 * Create widgets areas, so users can customize with drag & drop through admin panel
 */
function app_register_widgets_areas() {
    // New Widget for Tags
    register_sidebar(
        [
            'id' => 'sidebar-1',
            'name' => 'Tags',
            'description' => 'Tags Area',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_wiget' => '',
            'after_widget' => '',
        ]
    );

    // New Widget for Social Links
    register_sidebar(
        [
            'id' => 'sidebar-2',
            'name' => 'Social links',
            'description' => 'Social Links Area',
            'before_title' => '',
            'after_title' => '',
            'before_wiget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
        ]
    );

    // New Widget for Footer
    register_sidebar(
        [
            'id' => 'footer-1',
            'name' => 'Footer',
            'description' => 'Footer Widget Area',
            'before_title' => '',
            'after_title' => '',
            'before_wiget' => '',
            'after_widget' => '',
        ]
    );
}
 
/**
 * Register and load styles
 */
function app_register_styles() {
    $css_path = get_template_directory_uri() . "/style.css";
    $app_css_version = wp_get_theme()->get('Version'); // Get version from global style metadata

    wp_enqueue_style(
        'app-css',
        $css_path,
        ['app-bootstrap'], // Depends on bootstrap
        $app_css_version,
        'all'
    );
    
    wp_enqueue_style(
        'app-bootstrap',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',
        [],
        '4.4.1',
        'all'
    );
    
    wp_enqueue_style(
        'app-fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css',
        [],
        '5.13.0',
        'all'
    );
}

/**
 * Register and load scripts
 */
function app_register_scripts() {
    $js_path = get_template_directory_uri() . '/assets/js/main.js';

    wp_enqueue_script(
        'app-jquery',
        'https://code.jquery.com/jquery-3.4.1.slim.min.js',
        [],
        '3.4.1',
        true
    );
    
    wp_enqueue_script(
        'app-popper',
        'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',
        [],
        '1.16.0',
        true
    );

    wp_enqueue_script(
        'app-bootstrap',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',
        [],
        '4.4.1',
        true
    );

    wp_enqueue_script(
        'app-js',
        $js_path,
        [],
        '1.0.0',
        true
    );

}

/**
 * Remove wp default margin top
 */
add_theme_support('admin-bar', ['callback' => '__return_false']);

/**
 * Set up menus
 */
function app_register_menus() {
    // <location, description>
    $locations = [
        'primary' => 'Desktop Left Sidebar',
        'footer' => 'Footer'
    ];

    /**
     * Register menus to use on admin panel
     * Appearance > Menus
     */
    register_nav_menus($locations);
}

// Hooks to wordpress run our functions
add_action('after_setup_theme', 'app_theme_support');

add_action('wp_enqueue_scripts', 'app_register_styles');

add_action('wp_enqueue_scripts', 'app_register_scripts');

add_action('init', 'app_register_menus');

add_action('pre_get_posts', 'app_order_posts_by_date');

add_action('widgets_init', 'app_register_widgets_areas');

?>