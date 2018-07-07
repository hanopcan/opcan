<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>


<div id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<footer class="site-footer" id="colophon">

			<?php get_template_part('/partials/footers/footer'); ?>

		</footer><!-- #colophon -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

