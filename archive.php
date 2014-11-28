<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ustri-2014
 */

get_header(); ?>
	<?php /* main list of posts starts here 
					 add links to get category here somewhere */?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php 
			if ( have_posts() ) : 
				while ( have_posts() ) : the_post(); 
						get_template_part( 'content', get_post_format() );
				endwhile;
				ustri_2014_paging_nav();
			else :
				get_template_part( 'content', 'none' );
			endif; 
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
