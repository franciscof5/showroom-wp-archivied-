<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?> >
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>ShowRoom WP</title>
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>




<header id="masthead" class="site-header" role="banner">
	<div id="header-ad" class="row">
		PUBLICIDADE
	</div>
	<div id="header-top" class="row">
		<nav id="primary-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>
	</div>
	<div id="header-extra" class="row">
		+ ACESSADOS
	</div>
</header><!-- #masthead -->

<div id="main" class="site-main">