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

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

		<h2>Talk synopsis</h2>

		<?php the_content(); ?>

		<div class="button_container">
			<?php 
			if ( get_field('sign-up_button')) { ?>

				<a class="btn icon icon-arrow-right" href="<?php the_field('sign-up_button');?>" target="_blank">
					<span>Visit event website for more info</span>
				</a>
			<?php } ?>
		</div>

		<?php
		if ( !empty( $write_up = get_field( 'post_event_write-up' ) ) ) {
			?>
			<h2 class="mt-5">Event write-up</h2>

			<?php if ( get_field ( 'slides' ) ||  get_field ( 'video' ) ) : ?>
				<div class="button-container">

					<?php if ( get_field ( 'slides' ) ) : ?>
						<a href="<?php the_field( 'slides' ); ?>" class="btn">View slides</a>
					<?php endif; ?>		

					<?php if ( get_field ( 'video' ) ) : ?>
						<a href="<?php the_field( 'video' ); ?>" class="btn">Watch video</a>
					<?php endif; ?>	

				</div>
			<?php endif; ?>		

			<?php echo $write_up; ?>

			<?php
		}
		?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
