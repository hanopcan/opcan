<?php

$today = date('Ymd');
	$query_args = array(
		'post_type' 	=> 'talk',
		'meta_query' => array(
			array(
				'key'		=> 'date',
				'compare'	=> '>=',
				'value'		=> $today,
			)
			),
		'meta_key'	=> 'date',
		'orderby'	=> 'meta_value_num',
		'order'		=> 'ASC'
    );
    
    $the_query = new WP_Query( $query_args );
    
	// The Loop
	if ( $the_query->have_posts() ) { ?>
		<section class="talks-teasers">
    
			<h2>Listen to a talk</h2>
			<p>My next talks will be:</p>
				
			<?php 
			while( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<?php get_template_part( 'partials/teasers/talks-future' ); ?>

			<?php endwhile; // End the loop ?> 

		</section> 
         
    <?php
	wp_reset_query(); 
	} else {
		//get_template_part( 'template-parts/content', 'none' );
	} ?>