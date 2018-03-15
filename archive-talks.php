<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// output the contents of the talk page
		$query_args = array(
			'page_id' => '274'
		);

		$result = new WP_Query( $query_args );

		if ( $result->have_posts() ) {
			while ( $result->have_posts() ) : $result->the_post(); ?>
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>	
				<div class="hentry entry-content">
					<?php the_content(); ?>
				</div>
			<?php endwhile; // End the loop
		}
		wp_reset_query(); 
		// output of talks page complete
		?>
	</main><!-- .site-main -->
		
	<?php
	$today = date('Ymd');
	$query_args = array(
		'post_type' 	=> 'talks',
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
		<div class="next-talks-wrapper">
			<div class="header-wrapper">
				<header class="page-header">
						<h1 class="entry-title">Where am I speaking/teaching next?</h1>
				</header><!-- .page-header -->
			</div>	
			<?php 

			while( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="talk-wrapper">
					<div class="talk">
					<div class="talk-content">
						<?php
						/*
						* Include the Post-Format-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Format name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', 'talks' );
						?>
					</div>
					</div>
				</div>
			<?php endwhile; // End the loop ?> 
		</div> <!-- end next-talks-wrapper -->
	<?php
	wp_reset_query(); 
	} else {
		get_template_part( 'template-parts/content', 'none' );
	} ?>
		
	<?php
	$today = date('Ymd');
	$query_args = array(
		'post_type' 	=> 'talks',
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
		<div class="next-talks-wrapper">
			<div class="header-wrapper">
				<header class="page-header">
						<h1 class="entry-title">Where have I spoken previously?</h1>
				</header><!-- .page-header -->
			</div>	
			<?php 

			while( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="talk-wrapper">
					<div class="talk">
					<div class="talk-content previous-talk">
						<?php 
						$date = get_field('date');
						$date2 = date("F j, Y", strtotime($date)); 

						echo $date2 . ' - '; 

						if (get_field('post-event-link') ) { 
						?>
							<a href=" <?php the_field('post-event-link'); ?> " target="blank"><?php the_field('title'); ?></a>
						<?php } else {
							the_title();
						}
						
						the_field('post_event_write-up'); ?>
						
					</div>
					</div>
				</div>
			<?php endwhile; // End the loop ?> 
		</div> <!-- end next-talks-wrapper -->
	<?php
	wp_reset_query(); 
	} else {
		get_template_part( 'template-parts/content', 'none' );
	} ?>


</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
