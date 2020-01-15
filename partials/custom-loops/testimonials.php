<?php

$query_args = array(
	'post_type' => 'testimonial',
	'orderby'	=> 'meta_value_num',
	'order'		=> 'DESC',
);

$the_query = new WP_Query( $query_args );

// The Loop
if ( $the_query->have_posts() ) { ?>

	<h2>Is she for real?</h2>

	<p>Don’t just take my word for it! Here’s what some of my clients and previous colleagues have to say about working with me. More recommendations can be found on <a href="https://www.linkedin.com/in/hanopcan/" target="_blank" rel="noopener">LinkedIn profile</a>.</p>

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
