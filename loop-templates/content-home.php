<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>

<?php get_template_part( 'partials/banners/jungle-banner' ); ?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>

		<!-- Place somewhere in the <body> of your page -->
		<?php get_template_part( 'partials/custom-loops/testimonials' ); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
