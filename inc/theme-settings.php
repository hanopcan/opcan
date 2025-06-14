<?php
/**
 * Check and setup theme's default settings
 *
 * @package understrap
 *
 */

if ( ! function_exists ( 'understrap_setup_theme_default_settings' ) ) {
	function understrap_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$understrap_posts_index_style = get_theme_mod( 'understrap_posts_index_style' );
		if ( '' == $understrap_posts_index_style ) {
			set_theme_mod( 'understrap_posts_index_style', 'default' );
		}

		// Sidebar position.
		$understrap_sidebar_position = get_theme_mod( 'understrap_sidebar_position' );
		if ( '' == $understrap_sidebar_position ) {
			set_theme_mod( 'understrap_sidebar_position', 'right' );
		}

		// Container width.
		$understrap_container_type = get_theme_mod( 'understrap_container_type' );
		if ( '' == $understrap_container_type ) {
			set_theme_mod( 'understrap_container_type', 'container' );
		}
	}
}

// Add theme support for gradients, and define them.
add_theme_support(
	'editor-gradient-presets',
	array(
		array(
			'name'     => __( 'White to blue', 'tgwf' ),
			'gradient' => 'linear-gradient(135deg, hsla(211, 94%, 94%, 1) 0%, hsla(0, 0%, 100%, 1) 70%)',
			'slug'     => 'white-to-blue',
		),
	)
);