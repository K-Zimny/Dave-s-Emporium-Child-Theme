<?php
function daves_emporium_scripts() {
	wp_enqueue_style( 'daves-emporium-child-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'daves-emporium-child-style' ));
}
add_action( 'wp_enqueue_scripts', 'daves_emporium_scripts' );

//create custom post types 
function create_custom_post_types() {
	//custom post type for case studies
    register_post_type( 'user_inputs',
        array(
            'labels' => array(
                'name' => __( 'User Inputs' ),
                'singular_name' => __( 'User Input' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'user-inputs' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );