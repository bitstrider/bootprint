<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package BootPrint
 */
?>

<article class="col-md-3 col-xs-4 col-centered" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>					
<!--		<div class="entry-thumbnail">
 			<img class="thumbnail" src="<?php echo $image[0] ?>">
			<img class="overlay" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP4/x8AAwAB/2+Bq7YAAAAASUVORK5CYII=">		
			<i class="icon glyphicon glyphicon-search"></i>
		</div> -->

		<div class="entry-thumbnail thumb-box tint shrink">
			<img src="<?php echo $image[0] ?>">
			<div class="icon">
				<i class="glyphicon glyphicon-new-window"></i>
			</div>
		</div>
		
		<?php endif; ?>
	</header><!-- .entry-header -->
</article><!-- #post -->
