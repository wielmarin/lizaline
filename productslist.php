<?php

/* Template Name: Products Listing
Template Post Type: page
*/

get_header();



?>


<script>

 jQuery(document).ready(function( $ ) { 
  	$("#product-1").backstretch([<?php the_field('product_list_1_images_array'); ?>], {duration: 3000, fade: 750, paused: true, scale: 'fit', alignY: '0.2'});
		$("#product-2").backstretch([<?php the_field('product_list_2_images_array'); ?>], {duration: 3000, fade: 750, paused: true, scale: 'fit', alignY: '0.2'});
	$("#product-3").backstretch([<?php the_field('product_list_3_images_array'); ?>], {duration: 3000, fade: 750, paused: true, scale: 'fit', alignY: '0.2'});
		$("#product-4").backstretch([<?php the_field('product_list_4_images_array'); ?>], {duration: 3000, fade: 750, paused: true, scale: 'fit', alignY: '0.2'});
	$("#product-5").backstretch([<?php the_field('product_list_5_images_array'); ?>], {duration: 3000, fade: 750, paused: true, scale: 'fit', alignY: '0.2'});
		$("#product-6").backstretch([<?php the_field('product_list_6_images_array'); ?>], {duration: 3000, fade: 750, paused: true, scale: 'fit', alignY: '0.2'});
	$("#product-7").backstretch([<?php the_field('product_list_7_images_array'); ?>], {duration: 3000, fade: 750, paused: true, scale: 'fit', alignY: '0.2'});
		$("#product-8").backstretch([<?php the_field('product_list_8_images_array'); ?>], {duration: 3000, fade: 750, paused: true, scale: 'fit', alignY: '0.2'});
		
		
		
					$('#prev1').click(function() {
						$('#product-1').backstretch("prev");
					});
					$('#prev2').click(function() {
						$('#product-2').backstretch("prev");
					});
					$('#prev3').click(function() {
						$('#product-3').backstretch("prev");
					});
					$('#prev4').click(function() {
						$('#product-4').backstretch("prev");
					});
					$('#prev5').click(function() {
						$('#product-5').backstretch("prev");
					});
					$('#prev6').click(function() {
						$('#product-6').backstretch("prev");
					});
					$('#prev7').click(function() {
						$('#product-7').backstretch("prev");
					});
					$('#prev8').click(function() {
						$('#product-8').backstretch("prev");
					});
		
		
		$('#next1').click(function() {
			$('#product-1').backstretch("next");
		});
		$('#next2').click(function() {
			$('#product-2').backstretch("next");
		});
		$('#next3').click(function() {
			$('#product-3').backstretch("next");
		});
		$('#next4').click(function() {
			$('#product-4').backstretch("next");
		});
		$('#next5').click(function() {
			$('#product-5').backstretch("next");
		});
		$('#next6').click(function() {
			$('#product-6').backstretch("next");
		});
		$('#next7').click(function() {
			$('#product-7').backstretch("next");
		});
		$('#next8').click(function() {
			$('#product-8').backstretch("next");
		});
});

</script>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
	
	
<div id="product-list-heading">
	<h1 id="product-list-title">
		<?php the_title(); ?>
	</h1>
	<div class="border-title"></div>
</div>


 <?php
	endwhile; else: ?>
	<p>Sorry, no <?php the_title(); ?> available.</p>
	<?php endif; ?>
 <?php if ( get_field( 'on/off_1' ) ): ?>
<!--- START PRODUCT GRID --->
<div id="product-list-grid">

	<div id="product-1" class="product-list-item col-3">
		<div id="product-1-info" class="product-list-item-info">
			
			<div id="product-1-title" class="product-list-item-title">
				<?php the_field('product_1_name'); ?>
			</div>
			<div id="product-1-description" class="product-list-item-description">
				<?php the_field('product_1_description'); ?>
			</div>
			<div id="product-1-cta" class="product-list-item-cta">
				<a href="<?php the_field('product_1_link'); ?>"><?php the_field('product_1_cta'); ?></a>
			</div>
						<!-- Nav Buttons -->
			<span id="prev1" class="backstretchprev bsnav"><i class="fas fa-chevron-left"></i></span>
			<span id="next1" class="backstretchnext bsnav"><i class="fas fa-chevron-right"></i></span>
		</div>
	</div>	
	
<?php if ( get_field( 'on/off_2' ) ): ?>
	<div id="product-2" class="product-list-item col-3">
		<div id="product-2-info" class="product-list-item-info">
			<div id="product-2-title" class="product-list-item-title">
				<?php the_field('product_2_name'); ?>
			</div>
			<div id="product-2-description" class="product-list-item-description">
				<?php the_field('product_2_description'); ?>
			</div>
			<div id="product-2-cta" class="product-list-item-cta">
			<a href="<?php the_field('product_2_link'); ?>"><?php the_field('product_2_cta'); ?></a>
			</div>
			<!-- Nav Buttons -->
			<span id="prev2" class="backstretchprev bsnav"><i class="fas fa-chevron-left"></i></span>
			<span id="next2" class="backstretchnext bsnav"><i class="fas fa-chevron-right"></i></span>
		</div>
	</div>
<?php endif; // end of if field_name logic ?>	
	
<?php if ( get_field( 'on/off_3' ) ): ?>
	<div id="product-3" class="product-list-item col-3">
		<div id="product-3-info" class="product-list-item-info">
			
			<div id="product-3-title" class="product-list-item-title">
				<?php the_field('product_3_name'); ?>
			</div>
			<div id="product-3-description" class="product-list-item-description">
				<?php the_field('product_3_description'); ?>
			</div>
			<div id="product-3-cta" class="product-list-item-cta">
				<a href="<?php the_field('product_3_link'); ?>"><?php the_field('product_3_cta'); ?></a>
			</div>
						<!-- Nav Buttons -->
			<span id="prev3" class="backstretchprev bsnav"><i class="fas fa-chevron-left"></i></span>
			<span id="next3" class="backstretchnext bsnav"><i class="fas fa-chevron-right"></i></span>
		</div>
	</div>
<?php endif; // end of if field_name logic ?>	
	
<?php if ( get_field( 'on/off_4' ) ): ?>
	<div id="product-4" class="product-list-item col-3">
		<div id="product-4-info" class="product-list-item-info">
			<div id="product-4-title" class="product-list-item-title">
				<?php the_field('product_4_name'); ?>
			</div>
			<div id="product-4-description" class="product-list-item-description">
				<?php the_field('product_4_description'); ?>
			</div>
			<div id="product-4-cta" class="product-list-item-cta">
				<a href="<?php the_field('product_4_link'); ?>"><?php the_field('product_4_cta'); ?></a>
			</div>
						<!-- Nav Buttons -->
			<span id="prev4" class="backstretchprev bsnav"><i class="fas fa-chevron-left"></i></span>
			<span id="next4" class="backstretchnext bsnav"><i class="fas fa-chevron-right"></i></span>
		</div>
	</div>	
<?php endif; // end of if field_name logic ?>		
	
<?php if ( get_field( 'on/off_5' ) ): ?>
	<div id="product-5" class="product-list-item col-3">
		<div id="product-5-info" class="product-list-item-info">
			<div id="product-5-title" class="product-list-item-title">
				<?php the_field('product_5_name'); ?>
			</div>
			<div id="product-5-description" class="product-list-item-description">
				<?php the_field('product_5_description'); ?>
			</div>
			<div id="product-5-cta" class="product-list-item-cta">
				<a href="<?php the_field('product_5_link'); ?>"><?php the_field('product_5_cta'); ?></a>
			</div>
						<!-- Nav Buttons -->
			<span id="prev5" class="backstretchprev bsnav"><i class="fas fa-chevron-left"></i></span>
			<span id="next5" class="backstretchnext bsnav"><i class="fas fa-chevron-right"></i></span>
		</div>
	</div>	
<?php endif; // end of if field_name logic ?>	

<?php if ( get_field( 'on/off_6' ) ): ?>
	<div id="product-6" class="product-list-item col-3">
		<div id="product-6-info" class="product-list-item-info">
			<div id="product-6-title" class="product-list-item-title">
				<?php the_field('product_6_name'); ?>
			</div>
			<div id="product-6-description" class="product-list-item-description">
				<?php the_field('product_6_description'); ?>
			</div>
			<div id="product-6-cta" class="product-list-item-cta">
				<a href="<?php the_field('product_6_link'); ?>"><?php the_field('product_6_cta'); ?></a>
			</div>
						<!-- Nav Buttons -->
			<span id="prev1" class="backstretchprev bsnav"><i class="fas fa-chevron-left"></i></span>
			<span id="next1" class="backstretchnext bsnav"><i class="fas fa-chevron-right"></i></span>
		</div>
	</div>	
<?php endif; // end of if field_name logic ?>	

<?php if ( get_field( 'on/off_7' ) ): ?>
	<div id="product-7" class="product-list-item col-3">
		<div id="product-7-info" class="product-list-item-info">
			<div id="product-7-title" class="product-list-item-title">
				<?php the_field('product_7_name'); ?>
			</div>
			<div id="product-7-description" class="product-list-item-description">
				<?php the_field('product_7_description'); ?>
			</div>
			<div id="product-7-cta" class="product-list-item-cta">
				<a href="<?php the_field('product_7_link'); ?>"><?php the_field('product_7_cta'); ?></a>
			</div>
						<!-- Nav Buttons -->
			<span id="prev7" class="backstretchprev bsnav"><i class="fas fa-chevron-left"></i></span>
			<span id="next7" class="backstretchnext bsnav"><i class="fas fa-chevron-right"></i></span>
		</div>
	</div>	
<?php endif; // end of if field_name logic ?>	

<?php if ( get_field( 'on/off_8' ) ): ?>
	<div id="product-8" class="product-list-item col-3">
		<div id="product-8-info" class="product-list-item-info">
			<div id="product-8-title" class="product-list-item-title">
				<?php the_field('product_8_name'); ?>
			</div>
			<div id="product-8-description" class="product-list-item-description">
				<?php the_field('product_8_description'); ?>
			</div>
			<div id="product-8-cta" class="product-list-item-cta">
				<a href="<?php the_field('product_8_link'); ?>"><?php the_field('product_8_cta'); ?></a>
			</div>
						<!-- Nav Buttons -->
			<span id="prev8" class="backstretchprev bsnav"><i class="fas fa-chevron-left"></i></span>
			<span id="next8" class="backstretchnext bsnav"><i class="fas fa-chevron-right"></i></span>
		</div>
	</div>	
<?php endif; // end of if field_name logic ?>	
</div>
<!--- END PRODUCT GRID --->
<?php else : ?>
 	<h2 id="no-product">Sorry, no <?php the_title(); ?> available.</h2>
<?php endif; // end of if field_name logic ?>	

<?php get_footer() ?>