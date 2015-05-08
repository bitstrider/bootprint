<?php
/**
 * Blog Template
 *
   Template Name: Blog
 *
 * @file           blog.php
 * @package        BootPrint 
 * @author         Jason Yung 
 * @copyright      2015 Jason Yung
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */

get_header(); ?>
	
	<section class="site-section" role="main">
		<div class="container">

		<?php
		global $wp_query;
		if ( get_query_var('paged') ) {
			$paged = get_query_var('paged');
		} elseif ( get_query_var('page') ) {
			$paged = get_query_var('page');
		} else {
			$paged = 1;
		}
			query_posts( array( 'post_type' => 'post', 'paged' => $paged ) );
		?>   


		
		<?php if ( have_posts() ) : ?>

			<?php $i = 0/* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); 
				if ($i%3 ==0) { /* have a row for every 3 */ 
					if ($i != 0) { ?>
						</div>
					<?php } ?>
					<div class="row">
				<?php } ?>
				<?php get_template_part( 'content', get_post_format() ); $i++; ?>
			<?php endwhile; ?>
			</div> <!-- close out .row -->
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		</div>
	</section>

<?php get_footer(); ?>