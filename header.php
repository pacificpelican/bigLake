<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package greenlake
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="supermegacontainer" id="containerzero">

<div class="megacontainer row" id="containerport">
<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false">☰</button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->	
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_s' ); ?></a>
<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>

<div id="mn" class="keycontainer">
	<header id="masthead" class="site-header" role="banner">

		
	</header><!-- #masthead -->
<div id="nav-holder">
<nav class="top-bar" data-topbar>
					<ul class="title-area">

					<li class="name">
					<h1 class="ballingertitle" id="ballingerblogtitle"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</li>
					<li class="toggle-topbar menu-icon">
					<a href="#"><span></span></a>
					</li>
					</ul>
						<section class="top-bar-section">
							<ul class="right">
							<?php wp_nav_menu( array( 'theme_location' => 'lower' ) ); ?>
							</ul>

						</section>
			</nav> 
</div><!-- #nav-holder -->

	<div id="content" class="site-content">
	