<?php
/**
 * Partial for outputting all future talks
 * If there are no future talks, it creates a link to my past talks
 *
 * @package WordPress
 * @subpackage OpCan
 */

$today = date( 'Ymd' );
$query_args = array(
	'post_type'  => 'talk',
	'meta_query' => array(
		array(
			'key'     => 'date',
			'compare' => '>=',
			'value'   => $today,
		),
	),
	'meta_key'   => 'date',
	'orderby'    => 'meta_value_num',
	'order'      => 'ASC',
);

$the_query = new WP_Query( $query_args ); ?>

<section class="talks-teasers">
<h2>Talks</h2>

	<?php
	// The Loop.
	if ( $the_query->have_posts() ) {
		?>

		<p>Here are the talks I've got lined up:</p>

		<?php
		while ( $the_query->have_posts() ) : $the_query->the_post();
			?>

			<?php get_template_part( 'partials/teasers/talks-future' ); ?>

			<?php
		endwhile; // End the loop.

		wp_reset_query();
		?>

		<p class="mt-5">

		<?php
	} else {
		?>
		<p>I don't have anything lined up at the moment. <a href="/contact">Get in touch</a> if you'd like to change that!</p>
		<?php
	}
	?>

	<p>If you'd like to see what I've done in the past, you can follow the link below to see a list of the talks I've given.</p>

	<a class="btn icon icon-arrow-right" href="past-talks/">
		<span>See my past talks</span>
	</a>

</section> 
