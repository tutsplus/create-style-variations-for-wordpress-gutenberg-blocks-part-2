<?php

// tnc = twenty nineteen child

// Include parent theme styles
function tnc_enqueue_parent_theme_styles() {
    wp_enqueue_style( 'parent-theme-styles', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'tnc_enqueue_parent_theme_styles' );

function tnc_add_styles() {
	wp_enqueue_style( 'tnc-bsv-css', get_stylesheet_directory_uri() . '/tnc_bsv.css' );
}
add_action('enqueue_block_assets', 'tnc_add_styles');

function tnc_add_scripts() {
    wp_enqueue_script(
        'tnc-bsv-js',
        get_stylesheet_directory_uri() . '/tnc_bsv.js'
    );
}
add_action( 'enqueue_block_editor_assets', 'tnc_add_scripts' );