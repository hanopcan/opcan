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
<h2>Listen to a talk</h2>

	<?php
	// The Loop.
	if ( $the_query->have_posts() ) {
		?>

		<p>Here are talks I've got lined up:</p>

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
		<p>
		<?php
	}
	?>

	I've given a lot of talks over the years. Follow the link below to see a full list.</p>

	<a href="past-talks/">
		<button class="btn btn-primary">See my past talks <span class="icon fas fa-arrow-right"></span></button>
	</a>

</section> 
