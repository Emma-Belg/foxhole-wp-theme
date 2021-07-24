<?php
//add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
//function my_theme_enqueue_styles() {
//    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
//        array( 'parenthandle' ),
//        wp_get_theme()->get('Version') // this only works if you have Version in the style header
//    );
//}
//
//function enqueue_parent_styles() {
//    wp_enqueue_style('parent', get_template_directory_uri() . '/style.css');
//}

//add_action( 'wp_enqueue_scripts', function() {
//    wp_enqueue_style( 'twentytwenty-style', get_template_directory_uri() . '/style.css' );
//});

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( 'twenty-twenty-one-style' ),
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
}