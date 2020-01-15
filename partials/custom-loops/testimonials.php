<?php

$query_args = array(
	'post_type' => 'testimonial',
	'orderby'	=> 'meta_value_num',
	'order'		=> 'DESC',
);

$the_query = new WP_Query( $query_args );

// The Loop
if ( $the_query->have_posts() ) { ?>

	<div class="flexslider">
		<ul class="slides">

		<?php
		while ( $the_query->have_posts() ) :
			$the_query->the_post();
			?>

			<li>

			<?php get_template_part( 'partials/teasers/testimonial' ); ?>

			</li>

		<?php endwhile; // End the loop ?> 

		</ul>
	</div>
		
	<?php
	wp_reset_postdata();
}
