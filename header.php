<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ustri-2014
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

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
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 
                                'container_class' => 'group main-menu-main-container' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
  <!--end header.php-->
