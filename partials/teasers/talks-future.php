<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

$date = get_field('date');
$date2 = date("F j, Y", strtotime($date)); 

?>


<article class="row my-3" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="my-3">

		<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>

	</div>	


	<header class="entry-header">

		<div class="date"> <?php echo $date2;?> </div>

		<a href="<?php the_permalink(); ?>">
			<h3> <?php the_field('title');?> </h3>
		</a>

		<a href="<?php the_permalink(); ?>">
			<button class="btn btn-primary my-3">Find out more <span class="icon fas fa-arrow-right"></span></button>
		</a>

	</header><!-- .entry-header -->


</article><!-- #post-## -->
