<?php
function daves_emporium_scripts() {
	wp_enqueue_style( 'daves-emporium-child-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'daves-emporium-child-style' ));
}
add_action( 'wp_enqueue_scripts', 'daves_emporium_scripts' );
?>