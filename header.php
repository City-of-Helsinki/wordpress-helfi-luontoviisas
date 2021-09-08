<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmascores
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>



	<div id="page" class="site">

		<a class="screen-reader-text" href="#content">Siirry sisältöön</a>

		<header id="masthead" class="site-header">

			<section class="section desktop-only">

				<div class="container">
					<div class="logo columns is-mobile is-vcentered desktop-only">
						<?php the_custom_logo(); ?>
						<div class="site-brand">Luontoviisas</div>
					</div>
					<div class="nav-end">
						<div class="columns">
							<div tabindex="0" class="column search-open is-narrow">
								<div  class="hds-icon hds-icon--size-s hds-icon--search desktop-only">
									Hae
								</div>
								<span class="search-text">Hae</span> 
								<div class="search-box" aria-expanded="false" aria-label="Avaa sivuston haku">
									<?php get_search_form(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<nav class="navigation">
				<div class="navbar-brand mobile-only is-mobile is-vcentered">
					<div class="navbar-burger burger" data-target="navMenuColorinfo-example">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="mobile-logo is-mobile columns is-vcentered mobile-only">
						<?php the_custom_logo(); ?>
						<div class="site-brand mobile-only">Luontoviisas</div>
					</div>
				</div>

				<div class="navbar-menu">
					<div class="container">
						<?php 
						wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'menu' 			  => 'Menu 1',
								'container' => false,
							)
						);
						?>
					</div>
				</div>
			</nav>
		</header><!-- #masthead -->


		<div id="content" class="site-content">
