<?php
/**
 * This function take care of enqueue scripts
 *
 * @return void
 */
function softuni_assets(){
    wp_enqueue_style( 'sofuni-jobs', get_stylesheet_directory_uri() . '/assets/css/master.css', array(), '0.1.0' );
        // filemtime( get_template_directory_uri(). '/css/master.css' ));
}
add_action( 'wp_enqueue_scripts', 'softuni_assets' );
