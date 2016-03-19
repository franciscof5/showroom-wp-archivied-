<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?> >
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>ShowRoom WP</title>
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>



<div class="container">
	<header id="masthead" class="site-header" role="banner">
		<div id="header-advt" class="row text-center">
			<img src="<?php echo bloginfo('stylesheet_directory') ?>/imgs/topo-ad.png" alt="Banner">
		</div>
		<div id="header-top" class="row">
			<img src="<?php echo bloginfo('stylesheet_directory') ?>/imgs/logo-showroom.png" alt="ShowRoom">
			<nav id="primary-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div>
		<div id="header-extra" class="row">
			+ ACESSADOS
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">