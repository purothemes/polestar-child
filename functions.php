<?php

/**
 * Enqueue theme scripts and styles.
 */
function polestar_child_scripts() {

	// Child theme stylesheet.
	wp_enqueue_style( 'polestar-child', get_stylesheet_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'polestar_child_scripts', 8 );
