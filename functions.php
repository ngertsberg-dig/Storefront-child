<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 
}

add_filter('show_admin_bar', '__return_false');

function wpdocs_theme_name_scripts() {
    wp_enqueue_script( 'Swiper JS', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js', array(), '1.0.0', false );
    wp_enqueue_style( 'Swiper CSS', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/css/swiper.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'TweenMax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js', array(), '1.0.0', false );
    wp_enqueue_style( 'Font Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '1.0.0', false );
    wp_enqueue_style( '_pc_styles', get_template_directory_uri() . '/build/css/compiled/main.css' );

    

    }
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
}

if( function_exists('acf_set_options_page_title') ) {
  acf_set_options_page_title( __('Universal Fields') );
}