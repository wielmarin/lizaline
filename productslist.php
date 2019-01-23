<?php

/* Template Name: Products Listing
Template Post Type: product
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
	
	

 
<div id="product-list-grid">
<!--- TRIAL LOOP --->
<?php

	$my_query = new WP_Query( array(
		'post_type'      => 'product',
		'posts_per_page' => -1,
		'post_parent'    => $post->ID,
		'order'          => 'ASC',
		'orderby'        => 'menu_order'
	));
	
	if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post(); 
	
	$post_id = get_the_ID();

?>
	<div id="product-<?php echo $post_id; ?>" class="product-list-item col-3">
		<div id="product-<?php echo $post_id; ?>-info" class="product-list-item-info">
			
			<div id="product-<?php echo $post_id; ?>-title" class="product-list-item-title">
				<?php 
				if (!empty(get_field('short_description'))) :
				the_field('short_description');
				else :
				the_title(); 
				endif;
				?>
			</div>
			<div id="product-<?php echo $post_id; ?>-description" class="product-list-item-description">
				<?php the_field('product_price'); ?>
			</div>
			<div id="product-<?php echo $post_id; ?>-cta" class="product-list-item-cta">
				<a href="<?php the_permalink(); ?>">More Information</a>
			</div>
						<!-- Nav Buttons -->
			<span id="prev<?php echo $post_id; ?>" class="backstretchprev bsnav"><i class="fas fa-chevron-left"></i></span>
			<span id="next<?php echo $post_id; ?>" class="backstretchnext bsnav"><i class="fas fa-chevron-right"></i></span>
		</div>
	</div>
	<!---- Make variables for Backstretch Script below ---->
	<?php 
	
	$productPhotoArray;
	
	// Using photos from product page (default)
	if( get_field('product_photo_1') ) {
		$productPhoto1 = get_field('product_photo_1');
	} else {
		$productPhoto1 = "";
	}
	if( get_field('product_photo_2') ) {
		$productPhoto2 = "','" . get_field('product_photo_2');
	} else {
		$productPhoto2 = "";
	}
	if( get_field('product_photo_3') ) {
		$productPhoto3 = "','" . get_field('product_photo_3');
	} else {
		$productPhoto3 = "";
	};
	
	// Category photos
	if( get_field('photo_1') ) {
		$categoryPhoto1 = get_field('photo_1');
	} else {
		$categoryPhoto1 = "";
	}
	if( get_field('photo_2') ) {
		$categoryPhoto2 = "','" . get_field('photo_2');
	} else {
		$categoryPhoto2 = "";
	}
	if( get_field('photo_3') ) {
		$categoryPhoto3 = "','" . get_field('photo_3');
	} else {
		$categoryPhoto3 = "";
	}
	if( get_field('photo_4') ) {
		$categoryPhoto4 = "','" . get_field('photo_4');
	} else {
		$categoryPhoto4 = "";
	};


	
		/// From Product Page Photos
	if (!$categoryPhoto1 && !$categoryPhoto2 && !$categoryPhoto3){
		$productPhotoArray = "'" . $productPhoto1 . $productPhoto2 . $productPhoto3 . "'";
	} else {
		$productPhotoArray = "'" . $categoryPhoto1 . $categoryPhoto2 . $categoryPhoto3 . $categoryPhoto4 . "'";
	};
		
	?>
	
	<!---- Fill category page photos using Backstretch and ACF PHP from above ---->
<script>
jQuery(document).ready(function( $ ) { 
	var catStretch;
	var catArray = jQuery('#backstretch-array-<?php echo $post_id; ?>').html();
	console.log(catArray);
	
	if(typeof catArray === 'undefined') {
		var catStretch = "<?php echo $productPhotoArray; ?>";
	} else {
		var catStretch = catArray;
	};
	
	console.log(catStretch); //THIS VARIABLE NOT WORKING IN BACKSTRETCH - ADDS EXTRA QUOTATION MARKS, DOESN'T HAPPEN FROM PHP VARIABLE

	
	$("#product-<?php echo $post_id; ?>").backstretch([<?php echo $productPhotoArray; ?>], {duration: 3000, fade: 750, paused: true, scale: 'fit', alignY: '0.2'});
	
	$('#prev<?php echo $post_id; ?>').click(function() {
		$('#product-<?php echo $post_id; ?>').backstretch("prev");
	});
	
	$('#next<?php echo $post_id; ?>').click(function() {
		$('#product-<?php echo $post_id; ?>').backstretch("next");
	});
});

</script>

<?php endwhile;
else: ?> <!--- When no products with this category as head --->
	<h2 id="no-product">Sorry, no <?php the_title(); ?> available.</h2>
<?php endif; ?>	<!---- End WP Query loop --->
</div>				

<?php get_footer() ?>