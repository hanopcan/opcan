<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

/**
 * @param  string  $filename
 * @return string
 */
function asset_path($filename) {
    $manifest_path = get_stylesheet_directory() .'/rev-manifest.json';
    if ( file_exists($manifest_path ) ) {
        $manifest = json_decode( file_get_contents( $manifest_path ), TRUE );
    } else {
        $manifest = array();
	}

    if ( array_key_exists( $filename, $manifest ) ) {
        return $manifest[$filename];
    }
    return $filename;
}

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		$css_version = filemtime( get_stylesheet_directory() . '/assets/css/theme.min.css' );

		wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:300,500&display=swap', array(), null, 'all' );
		wp_enqueue_style( 'opcan-test-styles', get_stylesheet_directory_uri() . '/assets/css/theme.min.css', array(), $css_version );

		wp_enqueue_script( 'jquery');
		wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/assets/js/popper.min.js', array(), wp_get_theme()->get( 'Version' ), true);

		wp_enqueue_script( 'opcan-test-scripts', get_template_directory_uri() . '/assets/js/theme.min.js', array(), null, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
