<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="content">

 *

 * @package gravit

 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<!--[if IE 8 ]>    <html dir="ltr" lang="en-US" class="no-js ie8 oldie"> <![endif]-->

<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link href='https://fonts.googleapis.com/css?family=Raleway:300,400,600,800' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">







<script src="https://use.typekit.net/hqc3sbr.js"></script>

<script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>



<div id="page" class="hfeed site">

	<?php do_action( 'before' ); ?>

	<header id="masthead" class="site-header" role="banner">

		<div class="site-branding">

			<?php //show title or Header image

			if ( get_header_image() ) { 

				echo '<a href="'. home_url() .'"><img alt="'. esc_attr( get_bloginfo( 'name' ) ) .'" title="'. esc_attr( get_bloginfo( 'name' ) ) .'" class="header-image" src="' . esc_url( get_header_image() ) . '" /></a>';

			} else { ?>

				<h1 class="site-title"><a title="<?php bloginfo( 'name' ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<?php } ?>			

			

			</div>	  	



			<nav id="site-navigation" class="main-navigation" role="navigation">



				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

				

			</nav><!-- #site-navigation -->




	<div class="container">		
		<div class="menu-mobile">

			<div class="site-branding-mobile">

						<?php //show title or Header image

						if ( get_header_image() ) { 

							echo '<a href="'. home_url() .'"><img alt="'. esc_attr( get_bloginfo( 'name' ) ) .'" title="'. esc_attr( get_bloginfo( 'name' ) ) .'" class="header-image" src="' . esc_url( get_header_image() ) . '" /></a>';

						} else { ?>

							<h1 class="site-title"><a title="<?php bloginfo( 'name' ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

						<?php } ?>

					

			</div>



	  				<div id="menu-toggle">

	  					<i class="fa fa-bars"></i>

   					</div>



	  				<nav id="site-navigation-mobile" class="main-navigation" role="navigation">



						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

				

					</nav><!-- #site-navigation-mobile -->

			

					

	  	</div>
	</div>  	



	</header><!-- #masthead -->



	<div id="content" class="site-content">