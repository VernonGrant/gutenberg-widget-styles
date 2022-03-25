<?php
/**
 * Place the following action in your theme.
 *
 * @author Vernon Grant <vernon@ruppell.io>
 * @package Gutenberg Widget Styles
 * @link https://github.com/VernonGrant/gutenberg-widget-styles
 */

/**
 * Add custom Gutenberg modifications.
 */
function prefix_gutenberg_widgets_enqueue() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'prefix-gutenberg-widgets-script',
		get_stylesheet_directory_uri() . '/src/gutenberg-widget-scripts.js',
		array(
			'wp-blocks',
			'wp-hooks',
		),
		$theme_version,
		true
	);

	wp_enqueue_style(
		'prefix-gutenberg-widgets-styles',
		get_stylesheet_directory_uri() . '/src/gutenberg-widget-styles.css',
		array(),
		$theme_version
	);
}
add_action( 'enqueue_block_editor_assets', 'prefix_gutenberg_widgets_enqueue' );
