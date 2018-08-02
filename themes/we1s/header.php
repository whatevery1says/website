<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
	<?php if ( get_theme_mod('site_favicon') ) : ?>
		<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
	<?php endif; ?>
<?php endif; ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action('sydney_before_site'); //Hooked: sydney_preloader() ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sydney' ); ?></a>

	<?php do_action('sydney_before_header'); //Hooked: sydney_header_clone() ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrap">
            <div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<form id="search-form" role="search" method="get" class="search-form text-right" action="http://contact@we1s.ucsb.edu/">
							<div id="custom-search-input">
							<div class="input-group input-group-sm col-md-12">
								<span class="screen-reader-text">Search for:</span>
								<input id="search-input" type="text" class="  search-query form-control" placeholder="Search ..." value="" name="s">
								<span class="input-group-btn">
									<button class="btn btn-danger" type="button">
									<i class="fa fa-search" aria-hidden="true" onclick="document.getElementById('search-form').submit();"></i>
									</button>
								</span>
								<span class="input-group contact-group">
									<a href="mailto:contact@we1s.ucsb.edu">
										<span class="screen-reader-text">Contact WE1S by Email</span>
										<i class="fa fa-envelope fa-2x social-media-icon" aria-hidden="true" title="Contact WE1S by Email"></i>
									</a>
									<a href="https://www.facebook.com/WE1Sproject/" target="_blank">
										<span class="screen-reader-text">Follow WE1S on Facebook</span>
										<i class="fa fa-facebook fa-2x social-media-icon" aria-hidden="true" title="Follow WE1S on Facebook"></i>
									</a>									
									<a href="https://twitter.com/WE1Sproject" target="_blank">
										<span class="screen-reader-text">Follow WE1S on Twitter</span>
										<i class="fa fa-twitter fa-2x social-media-icon" aria-hidden="true" title="Follow WE1S on Twitter"></i>
									</a>
									<a href="https://www.cafepress.com/we1sproject" target="_blank">
										<span class="screen-reader-text">Follow WE1S on Twitter</span>
										<i class="fa fa-shopping-cart fa-2x social-media-icon" aria-hidden="true" title="WE1S Shop"></i>
									</a>									
								</span>
							</div>
						</div>
						</form>
					</div>
				</div>
                <div class="row">
					<div class="col-md-4 col-sm-8 col-xs-12">
					<?php if ( get_theme_mod('site_logo') ) : ?>
						<div class="row">
						<div class="col-xs-3">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>" /></a>
						</div>
						<div class="col-xs-9">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h2 class="site-description">A <a href="http://4humanities.org" target="_blank">4Humanities</a> Project</h2>
						</div>
						</div>
					<?php else : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>	        
					<?php endif; ?>
					</div>
					<div class="col-md-8 col-sm-4 col-xs-12">
						<!-- <form id="search-form" role="search" method="get" class="search-form text-right" action="http://contact@we1s.ucsb.edu/">
							<div id="custom-search-input">
							<div class="input-group input-group-sm col-md-12">
								<span class="screen-reader-text">Search for:</span>
								<input id="search-input" type="text" class="  search-query form-control" placeholder="Search ..." value="" name="s">
								<span class="input-group-btn">
									<button class="btn btn-danger" type="button">
									<i class="fa fa-search" aria-hidden="true" onclick="document.getElementById('search-form').submit();"></i>
									</button>
								</span>
							</div>
						</div>
						</form> -->
						<div class="btn-menu"></div>
						<nav id="mainnav" class="mainnav" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback' ) ); ?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<?php do_action('sydney_after_header'); ?>

	<div class="sydney-hero-area">
		<?php sydney_slider_template(); ?>
		<div class="header-image">
			<?php sydney_header_overlay(); ?>
			<img class="header-inner" src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
		</div>
		<?php sydney_header_video(); ?>

		<?php do_action('sydney_inside_hero'); ?>
	</div>

	<?php do_action('sydney_after_hero'); ?>

	<div id="content" class="page-wrap">
		<div class="container content-wrapper">
			<div class="row">	