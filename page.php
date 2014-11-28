<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package ustri-2014
 */

get_header(); ?>
	<?php /* Page top level content starts here */?>
	<div id="primary" class="content-area page">
    <article class="primary-content page-content">
      <header class="page-header">
        <h1><?php the_title();?></h1>
      </header>
  		<?php 
        while ( have_posts() ) : 
          the_post();
    			get_template_part( 'content', 'page' );
    		endwhile; // end of the loop. 
      ?>
    </article>
	</div><!-- #primary -->

<?php get_footer(); ?>
