<?php
/**
 * The sidebar containing the secondary widget area
 *
 * Displays on posts and pages.
 *
 * If no active widgets are in this sidebar, hide it completely.
 *
 * @package BootPrint
 */

if ( is_active_sidebar( 'sidebar-left' ) ) : ?>
	<div class="col-md-6 pull-left footer-sidebar" role="complementary">
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-left' ); ?>
		</div><!-- .widget-area -->
	</div><!-- .footer-siderbar -->
<?php endif; ?>