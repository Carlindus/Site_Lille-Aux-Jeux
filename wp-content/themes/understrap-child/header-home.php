<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link href="<?php echo get_stylesheet_directory_uri() ?>/css/owl.carousel.min.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri() ?>/css/owl.theme.default.min.css" rel="stylesheet">
	<Link href="<?php echo get_stylesheet_directory_uri() ?>/css/custom.css" rel="stylesheet" type="text/css">
	<Link href="<?php echo get_stylesheet_directory_uri() ?>/css/custom-responsive.css" rel="stylesheet" type="text/css">

</head>

<body <?php body_class(); ?>>
	<!-- <div class="headerContainer container-fluid position-relative d-flex justify-content-center align-tems-center" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
		<p class="d-flex align-items-center"><strong>Venez-vous former<br>en quelques semaines !</strong></p>
	</div>

<div class="hfeed site" id="page"> -->
<section id="home">
    <div class="logoHome">
      <img src="<?php echo get_stylesheet_directory_uri() ?>/img/LogoHome.svg" alt="LogoHome">
    </div>
		<div class="owl-carousel owl-theme">

		<?php

		// check if the repeater field has rows of data
		if( have_rows('slider_home') ):

			// loop through the rows of data
			while ( have_rows('slider_home') ) : the_row();

			// display a sub field value ?>
							<div style="background-image: url('<?php echo the_sub_field('slider_home_image'); ?>')">
							<a href="#titlePage">
								<p>
							<strong><?php echo the_sub_field('slider_texte_line01'); ?></strong>
							<br>
							<?php echo the_sub_field('slider_texte_line02'); ?>
						</p>
							</a>
					</div>

			        <?php

			    endwhile;

			else :

			    // no rows found

			endif;

			?>

    </div>
  </section>


	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar sticky-top navbar-light navbar-expand-md">

		<?php if ( 'container' == $container ) : ?>
			<div class="container" >
		<?php endif; ?>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse justify-content-center',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
