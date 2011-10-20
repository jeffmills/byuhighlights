<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php 
	wp_head();
?>
</head>

<body <?php body_class(); ?>>

<div id="top_bar_container">
	
	<div id="top_bar">

		<ul>
			
			<li><a href="http://byuhighlights.com/about">About</a></li>
			<li><a href="http://byuhighlights.com/contact">Contact</a></li>
			<li><a href="http://feeds.feedburner.com/byuhighlightscom"><img src="<?php bloginfo('template_directory'); ?>/images/rss.png" alt="stumble upon" /></a></li>
			<li><a href="http://twitter.com/#!/BYUhighlights"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="stumble upon" /></a></li>

		</ul>

	</div>

</div>

<div id="logo_box">
	
	<a href="http://byuhighlights.com"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt=""></a>

	<div id="top_ad">
		


	</div>

	<div class="clear"></div>

</div>

<div id="second_bar_container">

	<div id="second_bar">
		
		<?php get_search_form(); ?>

	</div>

</div>