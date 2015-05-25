<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ustri-2014
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<?php

$this_page_name = get_the_title();
$children = wp_list_pages( array(
  'title_li' => '',
  'child_of' => $post->ID,
  'echo' => 0
) );

?>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding navigation">
		  <a href="/" class="logo">
        <div class="logo-group">
          <div class="logo-first-line">
            <span class="home-link">United States</span>
          </div>
          <div class="logo-second-line">
            <span class="home-link">Tamiya Ryu Iaijutsu</span>
          </div>
        </div>
      </a>
		</div>

		<nav id="site-navigation" class="main-navigation navigation page-links" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'depth' => 1) ); ?>
      <ul id="menu-child" class="menu-child-nav">
        <?php $parentid = $post->post_parent > 0 ? $post->post_parent : $post->ID;?>
        <?php wp_list_pages(array('child_of' => $parentid, 'title_li' => __(''))); ?>
        <?php if (is_home() || is_category()) { wp_list_categories(array('title_li' => '')); }?> 
      </ul>
    </nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
  <!--end header.php-->
