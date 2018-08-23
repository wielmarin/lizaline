<?php

/* Template Name: Individual Product
Template Post Type: page
*/

get_header(); 


?>

<script>
jQuery( document ).ready(function() {
	jQuery('#individual-grid-small-photo-1').click(function() {
		jQuery('#individual-grid-large-photo-1').css('background-image', 'url(<?php the_field('product_photo_1'); ?>)');
	});
	jQuery('#individual-grid-small-photo-2').click(function() {
		jQuery('#individual-grid-large-photo-1').css('background-image', 'url(<?php the_field('product_photo_2'); ?>)');
	});
	jQuery('#individual-grid-small-photo-3').click(function() {
		jQuery('#individual-grid-large-photo-1').css('background-image', 'url(<?php the_field('product_photo_3'); ?>)');
	});
});
</script>
<div id="crumble"><?php breadcrumb_trail(); ?></div>
<div id="individual-container">

	<div id="individual-grid">
		<h1 id="individual-grid-title" class="grid-box">
			<?php the_title(); ?>
			<div class="border-product"></div>
		</h1>
		
		<div id="individual-grid-small-photo-1" class="individual-grid-small-photo grid-box" style="background-image: url('<?php the_field('product_photo_1'); ?>')">
			
		</div>
		<div id="individual-grid-small-photo-2" class="individual-grid-small-photo grid-box" style="background-image: url('<?php the_field('product_photo_2'); ?>')">
		
		</div>
		<div id="individual-grid-small-photo-3" class="individual-grid-small-photo grid-box" style="background-image: url('<?php the_field('product_photo_3'); ?>')">
		
		</div>
		<div id="individual-grid-large-photo-1" class="individual-grid-large-photo grid-box" style="background-image: url('<?php the_field('product_photo_1'); ?>')">
		
		</div>
	</div>

	<div id="individual-sidebar">
		<div id="individual-sidebar-price">
			<h1 id="individual-side-title">
				<?php the_field('product_price'); ?>
			</h1>
			<div id="individual-side-action">
			<?php if ( get_field('in_stock')) : ?>
				<a href="https://www.amazon.co.uk">Order on Amazon<i class="fas fa-chevron-right"></i> </a>
			<?php  else : ?>
				<p>Sorry, this product is current out of stock.</p>	
			<?php endif; ?>
			</div>
		</div>
		<div id="individual-sidebar-other">
			<h3><?php the_field('box_title'); ?></h3>
			<div id="similar-product-1" class="individual-sidebar-other-item">
				<?php
					$post_object = get_field('product-1');

					if( $post_object ): 

						// override $post
						$post = $post_object;
						setup_postdata( $post ); 

						?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('similar-thumb'); ?></a>
							
						<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</div>
			<div id="similar-product-2" class="individual-sidebar-other-item">
				<?php
					$post_object = get_field('product-2');

					if( $post_object ): 

						// override $post
						$post = $post_object;
						setup_postdata( $post ); 

						?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('similar-thumb'); ?></a>
							
						<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</div>
			<div id="similar-product-3" class="individual-sidebar-other-item">
				<?php
					$post_object = get_field('product-3');

					if( $post_object ): 

						// override $post
						$post = $post_object;
						setup_postdata( $post ); 

						?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('similar-thumb'); ?></a>
							
						<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</div>
		</div>
		<div id="individual-sidebar-description">
			<p><?php the_field('product_description'); ?></p>
		</div>
	
	</div>
</div>



<?php get_footer() ?>