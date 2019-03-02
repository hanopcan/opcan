<?php
/**
 * Shortcode functions.
 *
 * @package understrap
 */

/**
 * [future-talks]
 *
 * @package understrap
 */
function future_talks_func() {

	ob_start();
	get_template_part( 'partials/custom-loops/talks-future' );
	return ob_get_clean();
}
add_shortcode( 'future-talks', 'future_talks_func' );

