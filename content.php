<?php
/**
 * @package ustri-2014
 */
?>
<?php 
$categories_list = get_the_category_list( __( ', ', 'ustri-2014' ) );
?>
<!--this is content.php-->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
    <h1><?php echo $categories_list; ?></h1>
  </header>

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content content">
		<h1><a class="post-title" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'ustri-2014' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'ustri-2014' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
