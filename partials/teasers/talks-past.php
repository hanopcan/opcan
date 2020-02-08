<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

$date = get_field('date');
$date2 = date("F j, Y", strtotime($date)); 

?>


<div class="teaser row" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="col-8 col-sm-6 col-md-3 pb-2 pb-sm-0">

		<?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>

	</div>	

	<section class="entry-header col-12 col-sm-6 col-md-9">

		<div class="date"> <?php echo $date2;?> </div>

		<a href="<?php the_permalink(); ?>">
			<h3> <?php the_field('title');?> </h3>
		</a>

		<p> <?php the_field('where');?> </p>

		<a href="<?php the_permalink(); ?>">
			<button class="btn btn-primary my-3">See write up <span class="icon icon-arrow-right"></span></button>
		</a>

	</section><!-- section -->


</div><!-- #post-## -->
