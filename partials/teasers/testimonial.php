<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */
?>

<div class="testimonial row mt-4">

	<div class="testimonial__image col-12 col-sm-5 col-md-3 text-center">
		<?php the_post_thumbnail( 'thumbnail' ); ?>
	</div>

	<div class="testimonial__text col-12 col-sm-7 col-md-8">
		<?php the_content(); ?>
	</div>

</div>
