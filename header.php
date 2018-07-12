<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
			<meta name="viewport" content="width=device-width">
			<meta name="description" content="<!-- FILL THIS IN LATER! -->"/>
			<title>LizaLine</title>
			
			<?php wp_head(); ?>
			
	<!---------- FONTS ---------->	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet"> 
		
	</head>

<body <?php body_class(); ?>> 

<!--- SITE HEADER --->
	<header class="site-header">
	
	<!--- Hamburger menu --->
	<div id="mobilemenuopen">
		<i class="fas fa-bars"></i>
		<p>M</p>
	</div>
	<div id="mobilemenuclose">
		<i class="fas fa-times"></i>
		<p>C</p>
	</div>
	
	<!--- Primary navigation --->
	<nav class="site-nav">

				<?php
					$args = array(
					'theme_location' => 'primary'
					);
				?>
				<?php wp_nav_menu( $args ); ?>	
				
	</nav>
	
	<!--- Logo --->
	
	<a class="logo" href="<?php echo get_home_url(); ?>">
		<img src="http://localhost/lizaline/wp-content/uploads/2018/07/Liza-line-e1531302690749.jpg" width="140px" height="true" alt="Liza line">
	</a>
	
	<!--- Logo --->
	
	<div class="search-box">
		<div class="hd-search">
			<?php get_search_form(); ?>
		</div>
		<div class="search-icon">
		</div>
	</div>	
	
	</header>
<!-- /site-header -->

<div class="container">