<?php get_header(); ?>

<!--- BASIC PAGES, INCLUDING HOME ---->


<!----------------- THE CONTENT --------------->

<div id="title-journal">
	<h1><?php the_title(); ?></h1>
	<div class="border-title"></div>
</div>

<div id="crumble"><?php breadcrumb_trail(); ?></div>

<div id="post-container">
	
	<div id="post-image">
			<?php	
				if ( has_post_thumbnail() ) {
				the_post_thumbnail('journal-thumb');
				} 
			?>
	</div>

	<div id="post-content">
	<div id="post-content-date"><?php the_time('j/m/Y'); ?></div>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		the_content();
		endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</div>

	<div id="post-sidebar">
		<div id="post-sidebar-title">
			<h3>Latest Entries</h3>
		</div>
		<div class="border"></div>
		<div id="post-sidebar-list">
			<?php
			$currentID = get_the_ID();
			$my_query = new WP_Query( array('showposts' => '10', 'post__not_in' => array($currentID)));
			while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
			<?php endwhile; ?>
		</div>
		<div id="post-sidebar-social">
		<div id="post-sidebar-title">
			<h3>Share this blog</h3>
		</div>
		<div class="border"></div>
			<i class="fab fa-facebook-f fa-lg"></i>
			<i class="fab fa-instagram fa-lg"></i>
		</div>
	</div>

</div>

<?php get_footer(); ?>