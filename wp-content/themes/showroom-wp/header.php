<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?> >
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>ShowRoom WP</title>
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>


<div id="header-advt" class="row text-center">
	<img src="<?php echo bloginfo('stylesheet_directory') ?>/imgs/topo-ad.png" alt="Banner">
</div>

<div class="container">
	<header id="masthead" class="site-header row" role="banner">
		
			<div class="col-sm-2">
				<img src="<?php echo bloginfo('stylesheet_directory') ?>/imgs/logo-showroom.png" alt="ShowRoom">
			</div>

			<div class="col-sm-8">
				<nav id="primary-navigation" role="navigation">
					
					 <nav class="navbar ">
					  <div class="container-fluid">
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        A
					      </button>
					    </div>
					    <div class="collapse navbar-collapse" id="myNavbar">
					    	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav', 'menu_id' => 'primary-menu', "container" => "ul" ) ); ?>
					      <!--ul class="nav navbar-nav">
					        <li class="active"><a href="#">Home</a></li>
					        <li><a href="#1">Page 1</a></li>
					        <li><a href="#2">Page 2</a></li>
					        <li><a href="#">Page 3</a></li>
					      </ul-->
					    </div>
					  </div>
					</nav>
				</nav>
			</div>

			<div class="col-sm-2">
				<?php get_search_form(); ?>
			</div>
		
	</header><!-- #masthead -->

	<div id="header-extra" class="row">
		+ ACESSADOS
	</div>
	<div id="main" class="site-main">