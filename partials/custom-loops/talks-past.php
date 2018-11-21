<?php

$today = date('Ymd');
	$query_args = array(
		'post_type' 	=> 'talk',
		'meta_query' => array(
			array(
				'key'		=> 'date',
				'compare'	=> '<',
				'value'		=> $today,
			)
			),
		'meta_key'	=> 'date',
		'orderby'	=> 'meta_value_num',
		'order'		=> 'DESC'
    );
    
    $the_query = new WP_Query( $query_args );
    
	// The Loop
	if ( $the_query->have_posts() ) { ?>
		<section class="talks-teasers-past">
    				
			<?php 
			while( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<?php get_template_part( 'partials/teasers/talks-past' ); ?>

			<?php endwhile; // End the loop ?> 

		</section> 
         
    <?php
	wp_reset_query(); 
	} else {
		//get_template_part( 'template-parts/content', 'none' );
	} ?>