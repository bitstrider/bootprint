<?php
/**
 * Blog Template
 *
   Template Name: Frontpage
 *
 * @file           frontpage.php
 * @package        BootPrint 
 * @author         Jason Yung 
 * @copyright      2015 Jason Yung
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */

get_header(); ?>
	
	<section id="frontpage" class="site-section">
		<div class="container-fluid" role="banner">
			<div class="col-md-12 frontpage-image">
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
				if ($image) : ?>
				    <img src="<?php echo $image[0]; ?>" alt="" />
				<?php endif; ?> 

			</div>
		</div>
		<div class="container" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" class="col-md-9 col-centered" <?php post_class(); ?>>
					<header class="row entry-header">
						<div class="divider"><h1 class="entry-title"><?php the_title(); ?></h1></div>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php //comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</section><!-- #frontpage -->
	<section id="skills" class="site-section">
		<div class="container">
			<header class="row entry-header">
				<div class="divider"><h1 class="entry-title">Some of the things I can do</h1></div>
			</header><!-- .entry-header -->
	</section>
	<section id="work" class="site-section">
		<div class="container">
			<header class="row entry-header">
				<div class="divider"><h1 class="entry-title">Some of my recent client work</h1></div>
			</header><!-- .entry-header -->

	</section>
	<section id="code" class="site-section">
		<div class="container">
			<header class="row entry-header">
				<div class="divider"><h1 class="entry-title">Some of my public code</h1></div>
			</header><!-- .entry-header -->
	</section>



	<section id="blog" class="site-section" role="main">

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