<?php
/*
Plugin Name: Block Style Variations
Version: 0.1
Description: Demonstrates how to add block style variations to an existing block.
Author: David Gwyer
Author URI: https://www.wpgoplugins.com
*/

// editor scripts
function bsv_editor($hook) {
	wp_enqueue_script( 'bsv_js', plugins_url( 'bsv.js', __FILE__ ), array( 'wp-blocks', 'wp-i18n', 'wp-element' ) );
}
add_action('enqueue_block_editor_assets', 'bsv_editor');

// frontend and editor scripts
function bsv_frontend_editor($hook) {
	wp_enqueue_style( 'bsv_css', plugins_url( 'bsv.css', __FILE__ ) );
}
add_action('enqueue_block_assets', 'bsv_frontend_editor');