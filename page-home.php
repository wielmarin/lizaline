<?php get_header(); ?>

<!--- Banner ---->
<!--- Hidden
<div class="banner">
	<div class="banner-text">
		<h1 class="title-header1">Autumn feelings<h1>
		<div class="cta-banner"><h3 id="explorelink">Explore</h3></div>
		
	</div>
</div>
--->

<div id="slicktop-container">
<div class="slicktopslider">
	<div>
		<div id="slicktop-block-1" class="slicktop-block">
			<!--
			<img src="/lizaline/wp-content/uploads/2018/08/Autumn-feelings-e1533817337202.jpg">
			-->
			
			<div id="slicktop-block-heading-1" class="slicktop-block-textbox">
				<h1 id="slicktop-block-title-1" class="slicktop-block-title">Autumn Feelings</h1>
				<h3 id="slicktop-block-text-1" class="slicktop-block-text">explore</h3>
			</div>
		</div>
	</div>
	<div>
		<div id="slicktop-block-2" class="slicktop-block">
			<!--
			<img src="/lizaline/wp-content/uploads/2018/08/Colors-of-nature.jpg">
			-->
			<div id="slicktop-block-heading-2" class="slicktop-block-textbox">
				<h1 id="slicktop-block-title-2" class="slicktop-block-title">Colours of nature</h1>
				<h3 id="slicktop-block-text-2" class="slicktop-block-text">explore</h3>
			</div>
		</div>
	</div>
	<div>
		<div id="slicktop-block-3" class="slicktop-block">
			<!--
			<img src="/lizaline/wp-content/uploads/2018/08/Declutter-home-e1533918892512.jpg">
			-->
			
			<div id="slicktop-block-heading-3" class="slicktop-block-textbox">
				<h1 id="slicktop-block-title-3" class="slicktop-block-title">Declutter your home</h1>
				<h3 id="slicktop-block-text-3" class="slicktop-block-text">inspiration</h3>
			</div>
		</div>
	</div>
</div>
<div id="slicktop-leftfade" class="slicktop-fade"></div>
<div id="slicktop-rightfade" class="slicktop-fade"></div>
</div>
<!----------------- THE CONTENT --------------->
<!-- NOT IN USE---------------------------------------------------------
<div id="journal_slider">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	the_content();
	endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
</div>
---------------------------------------------------------------------->

<?php get_template_part('grid'); ?>

<?php get_template_part('gridjournal'); ?>

<div class="introduction-home">
	<h1>About Liza Line</h1>
	<div class="border"></div>
	<p>Liza Line specialises in design and production of functional, beautiful and unique wooden furniture with a vintage look. Most of our products are made from natural and local material. Our collection includes wooden decorative storage, like shoe racks and stool benches, wooden decorative shelves, burlap floor pillows, light boxes and more. </p>
</div>


<?php get_footer(); ?>