<?php 
get_header();

?>

<div id="search-container">	
	<h1 class="titel-search">Search results for: <?php the_search_query(); ?></h1>
	
	<div id='searchresults'>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
			
			<div id="searchresults-block">
				<h2>
					<?php the_title(); ?>
				</h2>
				<p>
					<?php echo get_the_excerpt(); ?>
				</p>
				<?php if ( has_post_thumbnail() ) { 
					the_post_thumbnail('thumbnail-wide'); }
				else {
				?>
					<img src="/lizaline/wp-content/uploads/2018/07/Liza-line-e1531302690749.jpg" width=450 height=300>
				<?php
				}
				 ?>
				<a href="<?php the_permalink(); ?>">
					Take a look <i class="fas fa-angle-right"></i>
				</a>
			</div>
		
						
		<?php endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</div>
</div>
<?php 
get_footer();
?>