<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package parasolka
 */

?><!DOCTYPE html>
<html class="no-js" dir="ltr" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title>Fundacja Parasolka</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/sass/foundation-sites/dist/foundation.css" charset="utf-8">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/sass/fonts/stylesheet.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
	<?php $src = get_template_directory_uri(); ?>
	<link rel="shortcut icon" href="<?php echo $src ?>/favicon.ico" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'parasolka' ); ?></a>

<header id="header">
	<div class="row max-width">
		<div class="logo small-10 medium-3 columns">
			<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png"></a>
		</div>
		<div class="columns small-2 show-for-small-only">
			<div class="hamburger">
				<div class="line line1"></div>
				<div class="line line2"></div>
				<div class="line line3"></div>
			</div>
		</div>
		<nav>
			<div id="main-menu" class="columns small-12 medium-9">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'menu vertical medium-horizontal') ); ?>
			</div>
		</nav>
	</div>
</header>

	<div id="content" class="site-content">
