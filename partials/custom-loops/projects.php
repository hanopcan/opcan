<?php

$query_args = array(
	'post_type' 	=> 'project',
	'orderby'	=> 'meta_value_num',
	'order'		=> 'ASC'
);

$the_query = new WP_Query( $query_args );

// The Loop
if ( $the_query->have_posts() ) { ?>
	<section class="project-teasers">

		<h2>WordPress examples</h2>
		<p>Here's some of my recent work</p>
			
		<?php 
		while( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<?php get_template_part( 'partials/teasers/project' ); ?>

		<?php endwhile; // End the loop ?> 

	</section> 
		
<?php
wp_reset_query(); 
} else {
	//get_template_part( 'template-parts/content', 'none' );
} ?>