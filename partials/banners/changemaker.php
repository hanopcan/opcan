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
$jungle_id    = 512; // 512 in live site, 892 on local.
$jungle_sizes = '90vw';

?>

<div class="banner">
	<div class="banner__image">
		<?php opcan_output_responsive_image_markup( $jungle_id, $jungle_sizes ); ?>

		<div class="banner__text">
			<h1>Strategic leadership</br>
			for teams delivering<br/>
			impactful change</h1>
		</div>

	</div>  

</div>