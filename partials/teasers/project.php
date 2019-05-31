<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>


<div class="teaser row" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="col-12 col-sm-6">

		<a href="<?php the_field( 'site_url' ); ?>" target="_blank" rel="noopener">
			<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
		</a>	

	</div>	


	<header class="entry-header col-12 col-sm-6 align-self-center">

		<a href="<?php the_field( 'site_url' ); ?>" target="_blank" rel="noopener"> 
			<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?> 
		</a>

		<?php the_content(); ?>

		<a href=" <?php the_field( 'site_url' ); ?>" target="_blank" rel="noopener">
			<button class="btn btn-primary">See it for real <span class="icon fas fa-arrow-right"></span></button>
		</a>

	</header><!-- .entry-header -->


</div><!-- #post-## -->
