<?php get_header(); ?>

<!--- Blogs page ---->

<!----------------- THE CONTENT --------------->
<div id="title-journal">
	<h1>The journal</h1>
	<div class="border-title"></div>
</div>

<div id="crumble"><?php breadcrumb_trail(); ?></div>

<div id="excerptcontainer">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
	
	<div id="excerptblock" class="col-3 hoverunderline">
		<a href="<?php the_permalink(); ?>">
			<div id="thumbnail">
			<?php 
				if (has_post_thumbnail() ) {
				the_post_thumbnail('journal-thumb'); }
			?>
			</div>
			<div id="posttitle">
				<h2>
					
					<?php the_title(); ?>
					
				</h2>
		</a>	
			<p class="postinfo"><?php the_time('d F Y'); ?> </p>
		
		</div>
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