<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Virtual_Cycling_Club
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link href="/wp-content/themes/virtual-cycling-club/css/fontawesome-all.min.css" rel="stylesheet">
	<script src="/wp-content/themes/virtual-cycling-club/js/app.js"></script>
</head>

<body <?php body_class(); ?>>
	<nav>
		<div class="container">
		  <a href="/" class="brand-logo"><?= bloginfo( 'name' ); ?></a>
			  <ul id="nav-mobile" class="right hide-on-med-and-down">
				    <li><a href="/contact">Contact</a></li>
				    <li><a href="/login">Sign In</a></li>
			  </ul>
		</div>
	</nav>

	<section class="content">
