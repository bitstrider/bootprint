<?php
/**
 * The sidebar containing the footer widget area
 *
 * If no active widgets in this sidebar, hide it completely.
 *
 * @package BootPrint
 */

if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
	<div class="col-md-6 pull-right footer-sidebar" role="complementary">
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-right' ); ?>
		</div><!-- .widget-area -->
	</div><!-- #secondary -->
<?php endif; ?>