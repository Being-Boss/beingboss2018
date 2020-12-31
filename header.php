<?php
/**
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package beingboss2018
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
	<meta name="apple-itunes-app" content="app-id=956310359">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<!-- - - - - - - - - - BEING BOSS Code - - - - - - - - - - - - -->
	<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
	<link href="/wp-content/themes/beingboss2018/drawer/sandbox.css" rel="stylesheet">
	<link href="/wp-content/themes/beingboss2018/drawer/drawer.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<script src="https://use.typekit.net/owk8dwn.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

	<!-- Hotjar Tracking Code for www.beingboss.club -->
	<script>
	    (function(h,o,t,j,a,r){
	        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
	        h._hjSettings={hjid:563397,hjsv:6};
	        a=o.getElementsByTagName('head')[0];
	        r=o.createElement('script');r.async=1;
	        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
	        a.appendChild(r);
	    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
	</script>
		
		<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
		<script>
		window.addEventListener("load", function(){
		window.cookieconsent.initialise({
		  "palette": {
		    "popup": {
		      "background": "#252525",
		      "text": "#ffffff"
		    },
		    "button": {
		      "background": "#fff200",
		      "text": "#252525"
		    }
		  },
		  "position": "bottom-right",
		  "content": {
		    "message": "Hey boss! This website uses cookies to help us track things like analytics and user preferences.",
		    "href": "https://beingboss.club/privacy"
		  }
		})});
		</script>

	<script src='https://www.google.com/recaptcha/api.js'></script>


	<!-- - - - - - - - - - End BEING BOSS Code  - - - - - - - - -  -->
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->

	<?php if ( is_admin_bar_showing() ) : ?>
		<?php if ( is_page('Quiz') ) : ?>
			<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar" style="top: 32px;">
		<?php else : ?>
			<div class="wrapper-fluid wrapper-navbar fixed-top" id="wrapper-navbar" style="top: 32px;">
		<?php endif; ?>
	<?php else : ?>
		<?php if ( is_page('Quiz') ) : ?>
			<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar" style="top: 0;">
		<?php else : ?>
			<div class="wrapper-fluid wrapper-navbar fixed-top" id="wrapper-navbar" style="top: 0;">
		<?php endif; ?>
	<?php endif; ?>

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-light bg-light">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
							
						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						
						<?php endif; ?>
						
					
					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				


				<!-- The WordPress Menu goes here -->
				<div class="menuright">
					<div class="topmenu">
						<a href="/about">ABOUT</a>
						<a href="/press">PRESS</a>
						<a href="https://community.beingboss.club/" target="_blank">COMMUNITY</a>
						<a href="/account">ACCOUNT</a>
						<?php if ( !is_user_logged_in() ) { ?>
							<a href="/login">LOGIN</a>
						<?php } else { ?>
							<a href="<?php echo wp_logout_url(); ?>">LOG OUT</a>
						<?php } ?>
						<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>" id="top-search">
							<input name="s" type="search" placeholder="Search">
						</form>
					</div>
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'walker'          => new understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
				</div>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->