<?php get_header(); ?>

<!--- Blogs page ---->

<!----------------- THE CONTENT --------------->
<div id="title-journal">
	<h1>About Liza Line</h1>
	<div class="border-title"></div>
</div>

<div id="crumble"><?php breadcrumb_trail(); ?></div>

<div id="container-about">
	<div id="container-about-intro">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	the_content();
	endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
	
	<br>
	<div class="hiddentext">
		<?php the_field('hidden_text'); ?>
	</div>
	<div class="button-about">Read more...</div>
	</div>

	<div id="usp">

		<div id="usp-text1">
		<h3><?php the_field('box_2_title'); ?></h3>
		<p><?php the_field('box_2_text'); ?></p>
		</div>
		
		<div id="usp-img">
			<img src="<?php the_field('about_box_2_photo'); ?>" alt="Sandrine Burgi" width="350px" height="350px">
		</div>
		
		
	</div>
	
</div>

<?php get_footer(); ?>