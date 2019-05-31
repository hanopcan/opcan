<?php
/**
 * Display bamboo forest image with words over the top.
 *
 * @package Opcan
 */

// Get the upload directory path so we can access the media library.
$upload_dir     = wp_upload_dir();
$upload_dir_url = $upload_dir['baseurl'];

// Generate the image sizes.
$jungle_id    = 892; // 512 in live site, 892 on local.
$jungle_sizes = '90vw';

$wordpress_id   = 896; // 511 on local and live
$wordpress_sizes = '(min-width: 992px) 90vw, 40vw';

?>

<div class="banner">
	<div class="banner__image">
		<?php opcan_output_responsive_image_markup( $jungle_id, $jungle_sizes ); ?>

		<!-- <div class="banner__overlay"> </div> -->

		<div class="banner__text">
			<p>I help businesses</p>
			<p>make the most of</p>
	
			<div class="banner__text--wplogo">
				<img src="<?php echo esc_html( $upload_dir_url ); ?>/2019/03/WordPress-logotype-standard-white.png">
			</div>
		</div>

	</div>  

</div>
