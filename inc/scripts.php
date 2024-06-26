<?php

function blogstore_scripts() {
    
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '5.3.3');

    // Font Awesome CSS
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/all.min.css', array(), '6.5.2');

    // Font Awesome 4 Support
    wp_enqueue_style('font-awesome-v4', get_template_directory_uri() . '/assets/font-awesome/css/v4-shims.min.css', array(), '6.5.21');

    //Main Styesheet
	wp_enqueue_style( 'blogstore-style', get_stylesheet_uri(), array(), _S_VERSION );

    // RTL Data
	wp_style_add_data( 'blogstore-style', 'rtl', 'replace' );

    //Navigation JS
	wp_enqueue_script( 'blogstore-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );

    //Bootstrap JS
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), '5.3.3', true);

    //Comments JS
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blogstore_scripts' );
