<?php get_header(); ?>

<!--- Banner ---->

<div class="banner">
	<h3 class="cta-banner">Explore</h3>
	<h1 class="title-header1">Home inspiration autumn<h1>
	<h2 class="title-header2">Create a warm look with our handmade & wooden furniture<h2>
</div>

<!--- Grid ---->
<div id="grid-container" class="grid-box">
	<!-- linker deel grid -->
	<div id="grid-left" class="grid-box">
		<!-- Boven -->
		<div id="grid-left-top" class="grid-box">
			<div id="grid-left-top-left" class="grid-box smallsquare">

			</div>
			<div id="grid-left-top-middle" class="grid-box smallsquare">

			</div>
	
		</div>
		<!-- Onder -->
		<div id="grid-left-bottom" class="grid-box">
			<div id="grid-left-bottom-left" class="grid-box wide">

			</div>

			
		</div>
	
	</div>
	
	<!-- Center column -->
	<div id="grid-center" class="grid-box">
			<div id="grid-left-top-right" class="grid-box smallsquare">

			</div>		
			<div id="grid-left-bottom-right" class="grid-box smallsquare">

			</div>
	</div>
	
	<!-- Rechter deel grid -->
	<div id="grid-right" class="grid-box largesquare">
		<p class="grid-right-title title-flexbox">Functional can be</p>
		<p class="grid-right-subtitle title-flexbox">beautiful</p>
		<p class="grid-right-link title-flexbox">Explore</p>
	</div>
</div>


<!-- End Grid -->

<div class="container-journal">
	<h1 class="container-journal-title">Liza Line - The Journal</h1>
	<h2 class="container-journal-title">11 July 2018</h2>
</div>



<!----------------- THE CONTENT --------------->
<div id="maintext">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	the_content();
	endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
</div>

<div id="mainimage">
		<?php	
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('medium');
			} 
		?>
</div>
<?php get_footer(); ?>