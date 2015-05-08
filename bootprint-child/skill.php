<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package BootPrint
 */
?>

<article class="col-md-3 col-sm-5 col-xs-5 col-centered" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail('thumbnail'); ?>
		</div>
		<?php endif; ?>

		<h2 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bootpress' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<!-- <?php edit_post_link( __( 'Edit', 'bootpress' ), '<span class="edit-link">', '</span>' ); ?> -->
	</footer><!-- .entry-meta -->
</article><!-- #post -->
