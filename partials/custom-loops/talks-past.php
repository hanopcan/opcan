<?php

$posts_per_page = 8;

$today = date('Ymd');
	$query_args = array(
		'post_type' 	 => 'talk',
		'posts_per_page' => $posts_per_page,
		'meta_query'     => array(
			array(
				'key'		=> 'date',
				'compare'	=> '<',
				'value'		=> $today,
			)
			),
		'meta_key'	    => 'date',
		'orderby'	    => 'meta_value_num',
		'order'		    => 'DESC',
		'paged'         => get_query_var('paged') ? get_query_var('paged') : 1
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
		$args['total'] = (wp_count_posts( 'talk' )->publish / $posts_per_page)+1;
		
		understrap_pagination( $args ); ?>
         
    <?php
	wp_reset_query(); 
	} else {
		//get_template_part( 'template-parts/content', 'none' );
	} ?>