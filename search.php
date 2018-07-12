<!-- Header -->


	<?php

	get_header();?>
	
<div class="container-thema">

	<div class="flex-thema-content">
	
	<h1 class="titel-search">Zoekresultaten voor jouw zoekopdracht: <?php the_search_query(); ?></h1>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		?>
		
				<div id='searchresults'>
				<h2><?php the_title(); ?></h2>
				<p><?php echo get_the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>">Lees meer<i class="fas fa-angle-right"></i></a>
				</div>
				
		<?php
		endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	
	</div>
	
	<div class="flex-thema-sidebar">
	<div class="sidebar">
			<h4>Contact</h4>
			<p>Ben je op zoek naar meer informatie? Neem dan gerust contact met mij op.</p>
			<a class="button" href="/balloonsss/contact/">Neem contact op</a>
	</div>
	<div class="sidebar">
		<h4>Waarom Balloonsss?</h4>
			<i class="fas fa-check"></i> Kwalitatief en duurzaam<br>
			<i class="fas fa-check"></i> Professioneel<br>
			<i class="fas fa-check"></i> Passend bij elk themafeest
	</div>


	</div>
	
</div>



<?php 

get_footer();

?>