<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Code_Starter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">

		<header class="menu">
			<div class="container">
				<a href="./">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/nicole-tomazella.png" class="logo" alt="Nicole Tomazella" />
				</a>

				<div class="menu-link">
					<i class="fa fa-search"></i>
					<span>MENU</span>
					<div id="sidebartoggle">
						<i class="material-icons">menu</i>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">