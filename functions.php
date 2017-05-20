<?php

/**
 * Enqueue the parent theme stylesheet.
 */
function polestar_child_scripts() {
    wp_enqueue_style( 'polestar-parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'polestar_child_scripts', 8 );
