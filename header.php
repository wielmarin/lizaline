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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">	
	<link href="https://fonts.googleapis.com/css?family=Cookie|Courgette|Open+Sans" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Oswald:light|Roboto" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet"> 	
	<!-- Hamburgers -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/0.9.3/hamburgers.min.css" />
	
	
	<!-- Slick Slider -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	
	</head>

<body <?php body_class(); ?>> 

<!--- SITE HEADER --->
	<header class="site-header">

	
<div id="menus-container">

	<!--- Logo --->
	
	<a class="logo" href="<?php echo get_home_url(); ?>">
		<img src="/lizaline/wp-content/uploads/2018/09/Liza-Line-logo.png" width="140px" height="true" alt="Liza line logo">
	</a>
	
	<!--- Logo --->

	<!--- Primary navigation --->
	<nav class="site-nav">
	<div id="categories-menu">
			<?php
				$args = array(
				'theme_location' => 'secondary'
				);
			?>
			<?php wp_nav_menu( $args ); ?>	
	</div>
				<?php
					$args = array(
					'theme_location' => 'primary'
					);
				?>
				<?php wp_nav_menu( $args ); ?>	
				
	</nav>
	
</div>	
	

	
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