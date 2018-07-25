<?php get_header(); ?>

<!--- Banner ---->

<div class="banner">
	<div class="banner-text">
		<div class="cta-banner"><h3 id="explorelink">Explore</h3></div>
		<h1 class="title-header1">Home inspiration autumn<h1>
		<h2 class="title-header2">Create a warm look with our handmade & wooden furniture<h2>
	</div>
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

<?php get_footer(); ?>