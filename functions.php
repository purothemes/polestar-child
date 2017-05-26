<?php

/**
 * Enqueue theme scripts and styles.
 */
function polestar_child_scripts() {

	// Parent theme stylesheet.
    wp_enqueue_style( 'polestar-parent-style', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'polestar_child_scripts', 8 );
