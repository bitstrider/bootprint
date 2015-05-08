<?php
/**
 * The template for displaying all single posts
 *
 * @package BootPrint
 */

get_header(); ?>

	<section class="site-section" role="main">
		<div class="container">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php comments_template(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>