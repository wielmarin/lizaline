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
<?php
// check if the repeater field has rows of data
	if( have_rows('homepage_slide', 'option') ):
		// loop through the rows of data
		while ( have_rows('homepage_slide', 'option') ) : the_row();
?>
	<div>
		<div id="slicktop-block-<?php echo get_row_index(); ?>" class="slicktop-block">
			
			<img src="<?php the_sub_field('slider_image'); ?>">
			
			
			<div id="slicktop-block-heading-<?php echo get_row_index(); ?>" class="slicktop-block-textbox">
				<h1 id="slicktop-block-title-<?php echo get_row_index(); ?>" class="slicktop-block-title"><?php the_sub_field('slide_main_text'); ?></h1>
				<a href="<?php the_sub_field('slide_link_destination'); ?>" id="slicktop-block-text-<?php echo get_row_index(); ?>" class="slicktop-block-text"><?php the_sub_field('slide_link_text'); ?></a>
			</div>
		</div>
	</div>
<?php
		endwhile;
	endif;
?>	
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
	<h1><?php the_field('about_title'); ?></h1>
	<div class="border"></div>
	<p><?php the_field('about_text'); ?></p>
</div>


<?php get_footer(); ?>