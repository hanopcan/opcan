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

	<div class="col-9 col-sm-6 col-md-4">

		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	</div>	


	<header class="entry-header col-12 col-sm-6 col-md-8 align-self-center">

		<div class="date"> <?php echo $date2;?> </div>

		<a href="<?php the_permalink(); ?>">
			<h3> <?php the_field('title');?> </h3>
		</a>

		<p> <?php the_field('where');?> </p>

		<a class="btn my-3 icon icon-arrow-right" href="<?php the_permalink(); ?>">
			<span>Find out more</span>
		</a>

	</header><!-- .entry-header -->


</div><!-- #post-## -->
