<?php

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

<div id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

				<?php get_template_part( 'partials/custom-loops/talks-past' ); ?>

			</main><!-- #main -->


			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- Container end -->

	<?php get_template_part('/partials/footers/footer-contact-cta'); ?>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
