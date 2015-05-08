<?php
/**
 * The sidebar containing the footer widget area
 *
 * If no active widgets in this sidebar, hide it completely.
 *
 * @package BootPrint
 */

if ( is_active_sidebar( 'sidebar-main' ) ) : ?>
	<div class="sidebar-main" role="complementary">
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-main' ); ?>
		</div><!-- .widget-area -->
	</div><!-- .sidebar-main -->
<?php endif; ?>