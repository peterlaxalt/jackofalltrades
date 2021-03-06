<?php

// ****************************************************
// load bootstrap jquery
// ****************************************************

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bs/js/bootstrap.js', array( 'jquery' ) );

	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

// ****************************************************
// disable auto <p> tags
// ****************************************************

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

// ****************************************************
// enable support for featured images
// ****************************************************

add_theme_support( 'post-thumbnails' );
