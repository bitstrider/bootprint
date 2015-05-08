<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package BootPrint
 */
?>



	<footer class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row footer-sidebars">

				<?php get_sidebar('left'); ?>
				<?php get_sidebar('right'); ?>
			</div>
			<div class="row">
			
				<div class="col-md-12 text-center">
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'bootprint' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'bootprint' ); ?>"><?php printf( __( 'Proudly powered by %s', 'bootprint' ), 'WordPress' ); ?></a>
				</div>
				<div class="col-md-12 text-center">
					<p><?php bloginfo("name"); ?> - &copy; <?php echo date('Y'); ?></p>
				</div> 
			</div><!-- .site-info -->
			<?php wp_footer(); ?>

		</div>
	</footer>
</body>
</html>