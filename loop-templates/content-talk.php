<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

$date = get_field('date');
$date2 = date("F j, Y", strtotime($date)); 

$today = date('Ymd');
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<h1> <?php the_field('title');?> </h1>

		<p class="date"> <?php echo $date2;?> </p>

		<p> <?php the_field( 'where' ); ?> </p>

		<?php if ( get_field ( 'slides' ) ||  get_field ( 'video' ) ) : ?>
			<div class="button-container">

				<?php if ( get_field ( 'slides' ) ) : ?>
					<a href="<?php the_field( 'slides' ); ?>" class="btn btn-primary">View slides</a>
				<?php endif; ?>		

				<?php if ( get_field ( 'video' ) ) : ?>
					<a href="<?php the_field( 'video' ); ?>" class="btn btn-primary">Watch video</a>
				<?php endif; ?>	

			</div>
		<?php endif; ?>		

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

		<?php if ( $date > $today ) { ?>

			<?php the_content(); ?>

		<?php } else { ?>

			<p><?php the_field( 'post_event_write-up' ); ?></p>

		<?php } ?>

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
				<div class="btn btn-primary"><span class="dashicons dashicons-welcome-learn-more"></span> Book space now <span class="dashicons dashicons-arrow-right-alt2"></span></div>	 	
			</a>

		<?php } ?>

	</div>

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
