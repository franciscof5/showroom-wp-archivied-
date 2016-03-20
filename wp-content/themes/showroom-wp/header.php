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

<div class="container-fluid">
	<header id="masthead" class="site-header row" role="banner">
		

			
				<nav id="primary-navigation" role="navigation">
					<div class="navbar-header text-center">
				      <img src="<?php echo bloginfo('stylesheet_directory') ?>/imgs/logo-showroom.png" alt="ShowRoom" id="header-logo">
				      <div class="navbar-rightss" style="float:right;">
					      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>
				    </div>
					 
					  <div class="container-fluid">
					    <div class="collapse navbar-collapse  navbar-right" id="myNavbar">
					    	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav', 'menu_id' => 'primary-menu', "container" => "ul" ) ); ?>
					      	<div class="navbar-right">
					    		<form role="search" method="get" id="searchform" action="http://www.example.com/" >
									<input type="text" placeholder="PESQUISAR" value="" name="s" id="s" />
									<!--input type="submit" id="searchsubmit" value="Search" -->
									<!--img src="<?php echo bloginfo('stylesheet_directory') ?>/imgs/logo-showroom.png" alt="ShowRoom"-->
									</div>
								</form>
							</div>
					    </div>
					  </div>
					
				</nav>


			<!--div class="col-sm-2">
				<?php get_search_form(); ?>
			</div-->
		
	</header><!-- #masthead -->

	<div id="header-extra" class="row">
		+ ACESSADOS
	</div>
	<div id="main" class="site-main">