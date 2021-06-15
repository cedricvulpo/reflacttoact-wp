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
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5R8H');</script>
	<!-- End Google Tag Manager -->
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700&amp;subset=latin-ext" rel="stylesheet">
	<?php wp_head(); ?>

	<link rel="icon" href="<?php echo get_stylesheet_directory_uri().'/img/favicon.ico'; ?>" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri().'/img/favicon.ico'; ?>" />
	<link rel="icon" type="image/ico" href="<?php echo get_stylesheet_directory_uri().'/img/favicon.ico'; ?>" />
	<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri().'/img/favicon.ico'; ?>" />
	<!-- <link rel="icon" type="image/png" href="<?php // echo get_stylesheet_directory_uri().'/img/favicon.png'; ?>" />
	<link rel="apple-touch-icon" href="<?php // echo get_stylesheet_directory_uri().'/img/favicon.png'; ?>" />
	<link rel="icon" sizes="192x192" href="<?php // echo get_stylesheet_directory_uri().'/img/favicon.png'; ?>" /> -->
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5R8H"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="page-header" itemscope itemtype="http://schema.org/WebSite">

		<div class="container">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>



					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->


		  <?php
			if (get_locale() == 'nl_NL') {
				?>
				<a href="https://www.unicef.be/nl" target="_blank" class="logo2">
					<img src="/wp-content/themes/leerkrachten-unicef/img/logo_UNICEF.png" alt="Logo Unicef NL" />
				</a>
				<?php
			} else {
				?>
				<a href="https://www.unicef.be/fr" target="_blank" class="logo2">
					<img src="/wp-content/uploads/2021/04/UNICEF_ForEveryChild_Cyan_Vertical_RGB_144ppi_FR-1-e1618490571741.png" alt="Logo Unicef FR" />
				</a>
				<?php
			}
			?>		

</div>
	</div>


<div class="main-menu bg-primary">
	<div class="container">

<nav class="navbar navbar-expand-md navbar-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- The WordPress Menu goes here -->
			<?php wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarNavDropdown',
					'menu_class'      => 'navbar-nav ml-auto',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'depth'           => 2,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			); ?>

</nav>
	</div>
</div>
