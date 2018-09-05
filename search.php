<?php 
get_header();

?>

<div id="title-journal">
	<h1 class="titel-search">Search results for: <?php the_search_query(); ?></h1>
	<div class="border-title"></div>
</div>

<div id="search-container">	
		
	<div id='searchresults'>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
			
			<div id="searchresults-block">
				<?php if ( has_post_thumbnail() ) { 
					the_post_thumbnail('excerpt-thumb'); }
				else {
				?>
					<img src="/lizaline/wp-content/uploads/2018/09/Colors-of-nature-e1536164236510.jpg" width=500px height=500px>
				<?php
				}
				 ?>
				<a href="<?php the_permalink(); ?>">
					More information <i class="fas fa-angle-right"></i>
				</a>
								<h2>
					<?php the_title(); ?>
				</h2>
			</div>
		
						
		<?php endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</div>
</div>
<?php 
get_footer();
?>