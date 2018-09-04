<?php get_header(); ?>


<!--- Blogs page ---->

<!----------------- THE CONTENT --------------->
<div id="title-journal">
	<h1>Contact</h1>
	<div class="border-title"></div>
</div>

<div id="crumble"><?php breadcrumb_trail(); ?></div>

<div class="flex-containercontact">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
	<?php the_content(); ?>
<?php
	endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

</div>

<?php get_footer(); ?>

