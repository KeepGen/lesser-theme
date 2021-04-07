<?php
add_action( 'wp_enqueue_scripts', 'enqueue_lesser_style' );
function enqueue_lesser_style() {
   wp_enqueue_style( 'style', get_stylesheet_uri() );
   wp_enqueue_style( 'lesser-theme', get_template_directory_uri() . '/assets/css/lesser-theme.css', 'style', null, null);
}