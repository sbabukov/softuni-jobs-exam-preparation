<?php
/**
 * This function take care of enqueue scripts
 *
 * @return void
 */
function softuni_assets(){
    wp_enqueue_style( 
        'sofuni-jobs', 
        get_stylesheet_directory_uri() . '/assets/css/master.css', array(), 
        filemtime( get_template_directory(). '/assets/css/master.css' ));
        // filemtime( get_template_directory_uri(). '/css/master.css' ));
}
add_action( 'wp_enqueue_scripts', 'softuni_assets' );

/**
 * This is function add custom class
 *
 * @return void
 */
function softuni_body_class( $classes) {
    $classes[] = 'test-class';
    return $classes;
}

add_filter( 'body_class', 'softuni_body_class' );
