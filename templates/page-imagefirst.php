<?php
/*
Template Name: Content with Image first
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main image-first" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->



<?php get_sidebar(); ?>


</div><!-- .site-content -->


<div class="image-first content_end">
	<div class="footer_container no-flex">
		<h3>Interested? Great! Whatever the size of your problem, there's nothing to lose so drop me a line and we can have a no obligation chat about how I could help.</h3>
		<div class="button_container">
			<a href="<?php echo get_site_url(); ?>/contact">
				<div class="button"><span class="dashicons dashicons-email-alt"></span> Contact Hannah</div>
			</a>
		</div>
	</div>
</div>	
<?php get_footer(); ?>
