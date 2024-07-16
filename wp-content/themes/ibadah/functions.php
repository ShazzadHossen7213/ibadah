<?php 
/*
 * My Theme Function --------------------------------
 */

//Theme Title 
add_theme_support('title-tag');

// Theme CSS JS File CALLING ---------------------------------------------------------------- 
function ibadah_css_js_file_calling() {
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/style.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme-default', get_template_directory_uri().'/assets/css/owl.theme.default.min.css');
    wp_enqueue_style('nice-select', get_template_directory_uri().'/assets/css/nice-select.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/css/fontawesome.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'function ibadah_css_js_file_calling' );