<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

$date = get_field('date');
$date2 = date("F j, Y", strtotime($date)); 
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<h2> <?php the_field('title');?> </h2>

	</header><!-- .entry-header -->

	<div class="date"> <?php echo $date2;?> </div>

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<div class="button_container">
	
		<?php 
		if ( get_field('sign-up_button')) { ?>

			<a href="<?php the_field('sign-up_button');?>" target="_blank">
				<div class="button"><span class="dashicons dashicons-welcome-learn-more"></span> Book your space now <span class="dashicons dashicons-arrow-right-alt2"></span></div>	 	
			</a>

		<?php } ?>

	</div>

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
