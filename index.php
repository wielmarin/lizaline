<?php get_header(); ?>

<!--- Blogs page ---->

<!----------------- THE CONTENT --------------->
<div id="excerptcontainer">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
	
	<div id="excerptblock" class="col-3">
		<a href="<?php the_permalink(); ?>">
			<div id="thumbnail">
			<?php 
				if (has_post_thumbnail() ) {
				the_post_thumbnail('excerpt-thumb'); }
			?>
			</div>
			<div id="posttitle">
				<h2>
					
					<?php the_title(); ?>
					
				</h2>
		</a>	
			<p class="postinfo"><?php the_time('d/m/y'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <?php the_author();?></a> </p>
		
		</div>
		
		<!--
		<div id="excerpts"><p>
		<?php echo get_the_excerpt(''); ?>
		<a href="<?php the_permalink(); ?>">Read more &raquo;</a>
		</p></div>
		-->
	</div>

	<?php
	endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>

</div>
	<!-- Pagination Nav -->
	<div id="blognav">
		<?php
		global $wp_query;

		$big = 999999999; // need an unlikely integer

		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
		?>
	</div>


<?php get_footer(); ?>