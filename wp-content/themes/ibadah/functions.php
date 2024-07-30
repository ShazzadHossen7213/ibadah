<?php
/*
 * Ibadha function and definitions.
 * @package ibadha
 * @link https://developer.wordpress.org/theme/theme-function/
 */
/**
 * Registring menu Support
 */
function ibadha_menu(){
    register_nav_menu('header_menu', __('Header menu','ibadha));de
}


<?php 
/*
 * My Theme Function --------------------------------
 */

//Theme Title 
// add_theme_support('title-tag'); 

// Theme CSS JS File CALLING ---------------------------------------------------------------- 
// function ibadah_css_js_file_calling() {

//     wp_enqueue_style('ibadah_style', get_stylesheet_uri());
//     wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.2', 'all');
//     wp_enqueue_style('bootstrap');
//     wp_register_style('audioplayer', get_template_directory_uri() . '/assets/css/audioplayer.min.css', array(), '1.0.0', 'all');
//     wp_enqueue_style('audioplayer');
//     wp_register_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), '6.5.2', 'all');
//     wp_enqueue_style('fontawesome');
//     wp_register_style('jquery.fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), '1.0.1', 'all');
//     wp_enqueue_style('jquery.fancybox');
//     wp_register_style('jquery.fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), '1.0.1', 'all');
//     wp_enqueue_style('jquery.fancybox');
    
    // jQuery & js
    // wp_enqueue_script('jquery');
    // wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '5.3.2', true);

// }
// add_action( 'wp_enqueue_scripts', 'ibadah_css_js_file_calling' );