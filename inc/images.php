<?php
/**
 * Image functions.
 *
 * @package OpCan
 */

/**
 * Generate responsive image output, including srcset attributes
 *
 * @param int $image_id Id of image we wish to generate srcset for.
 * @param string $sizes String of sizes image will be displayed at.
 */
function opcan_output_responsive_image_markup( $image_id, $sizes ) {

	$img_src        = wp_get_attachment_image_url( $image_id, 'large' );
	$img_srcset     = wp_get_attachment_image_srcset( $image_id, 'large' );
	$img_alt        = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
	?>

	<img src="<?php echo esc_attr( $img_src ); ?>" srcset="<?php echo esc_attr( $img_srcset ); ?>" sizes="<?php echo esc_html( $sizes ) ?>" alt="<?php echo esc_html( $img_alt ); ?>">

	<?php
}
