<?php
/**
 * @package ustri-2014
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			// /* translators: used between list items, there is a space after the comma */
			// $category_list = get_the_category_list( __( ', ', 'ustri-2014' ) );

			// /* translators: used between list items, there is a space after the comma */
			// $tag_list = get_the_tag_list( '', __( ', ', 'ustri-2014' ) );

			// if ( ! ustri_2014_categorized_blog() ) {
			// 	// This blog only has 1 category so we just need to worry about tags in the meta text
			// 	if ( '' != $tag_list ) {
			// 		$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'ustri-2014' );
			// 	} else {
			// 		$meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'ustri-2014' );
			// 	}

			// } else {
			// 	// But this blog has loads of categories so we should probably display them here
			// 	if ( '' != $tag_list ) {
			// 		$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'ustri-2014' );
			// 	} else {
			// 		$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'ustri-2014' );
			// 	}

			// } // end check for categories on this blog

			// printf(
			// 	$meta_text,
			// 	$category_list,
			// 	$tag_list,
			// 	get_permalink()
			// );
		?>

		<?php // edit_post_link( __( 'Edit', 'ustri-2014' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
