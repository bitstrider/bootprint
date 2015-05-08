<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package BootPrint
 *
 */

get_header(); ?>
	
	<section id="blog" class="site-section" role="main">
		<div class="container">
		
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
<?php get_sidebar(); ?>
<?php get_footer(); ?>