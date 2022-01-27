<?php

function my_assets() {
	// My stylesheets
	wp_enqueue_style('theme-custom', get_template_directory_uri() . '/assets/css/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style('theme', get_template_directory_uri() . '/style.css' , array(), wp_get_theme()->get( 'Version' ) );
	
	// My scripts
	wp_enqueue_script( 'main', get_template_directory_uri()."/assets/js/main.js",  array('jquery'), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'my_assets' );