<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		<?php if ( !is_page( 'Contact' ) ) { ?>
		<div class="content_end pre-footer-block">
			<div class="footer_container no-flex">
				<div class="footer_container_inner">
					<h3>Interested? Great! Whatever the size of your problem, there's nothing to lose so drop me a line and we can have a no obligation chat about how I could help.</h3>
					<div class="button_container">
						<a href="<?php echo get_site_url(); ?>/contact">
							<div class="button"><span class="dashicons dashicons-email-alt"></span> Contact Hannah</div>
						</a>
					</div>
				</div>
			</div>
		</div>	
		<?php } ?>


		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			<div class="footer_container">
				<div class="image">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/img/Han_says_hello_again.png">
				</div>
				<div class="text">
					<h2>Connect with me</h2>
					<div class="icons">
						<p><a href="https://twitter.com/hanopcan" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/twitter-logo.png" class="twitter" /></a></p>
						<p><a href="https://www.linkedin.com/in/operationcanopy/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/In-logo.png" class="linkedIn" /></a></p>
						<p><a href="<?php echo get_site_url(); ?>/contact"><span class="dashicons dashicons-email-alt"></span></a></p>
					</div>
				</div>
			</div>	

			<div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<div class="footer_menu">
					<p><a a href="<?php echo get_site_url(); ?>/privacy">privacy policy</a></p>
				</div>
				<p>Website built by Hannah <?php echo date("Y");?> :: <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>" target="_blank"><?php printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' );?> </a></p>
				
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
