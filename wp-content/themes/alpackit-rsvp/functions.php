<?php
/**
 * Alpackit-rsvp Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package alpackit-rsvp
 */

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function twentytwentytwo_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'twentytwentytwo-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'alpackit-rsvp-style',
		get_stylesheet_directory_uri() . '/style.css',
		[ 'twentytwentytwo-style' ]
	);
}
