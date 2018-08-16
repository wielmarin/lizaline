<?php

/* Template Name: Individual Product
Template Post Type: page
*/

get_header(); 


$product1 = "/lizaline/wp-content/uploads/2018/08/Liza-Line-Premium-wooden-storage-stool-bench-walnut-brown.jpg";
$product2 = "/lizaline/wp-content/uploads/2018/08/Liza-Line-Premium-wooden-storage-stool-bench-walnut-brown-front.jpg";
$product3 = "/lizaline/wp-content/uploads/2018/08/Liza-Line-Premium-wooden-storage-stool-bench-walnut-brown-front-in-use-e1533629283899.jpg";

?>

<script>
jQuery( document ).ready(function() {
	jQuery('#individual-grid-small-photo-1').click(function() {
		jQuery('#individual-grid-large-photo-1').css('background-image', 'url(<?php echo $product1 ?>)');
	});
	jQuery('#individual-grid-small-photo-2').click(function() {
		jQuery('#individual-grid-large-photo-1').css('background-image', 'url(<?php echo $product2 ?>)');
	});
	jQuery('#individual-grid-small-photo-3').click(function() {
		jQuery('#individual-grid-large-photo-1').css('background-image', 'url(<?php echo $product3 ?>)');
	});
});
</script>
<div id="crumble">Crumble pad here > category name > product name</div>
<div id="individual-container">

	<div id="individual-grid">
		<h1 id="individual-grid-title" class="grid-box">
			Product Title
			<div class="border-product"></div>
		</h1>
		
		<div id="individual-grid-small-photo-1" class="individual-grid-small-photo grid-box" style="background-image: url('<?php echo $product1 ?>')">
			
		</div>
		<div id="individual-grid-small-photo-2" class="individual-grid-small-photo grid-box" style="background-image: url('<?php echo $product2 ?>')">
		
		</div>
		<div id="individual-grid-small-photo-3" class="individual-grid-small-photo grid-box" style="background-image: url('<?php echo $product3 ?>')">
		
		</div>
		<div id="individual-grid-large-photo-1" class="individual-grid-large-photo grid-box" style="background-image: url('<?php echo $product1 ?>')">
		
		</div>
	</div>

	<div id="individual-sidebar">
		<div id="individual-sidebar-price">
			<h1 id="individual-side-title">
				£89.00 
			</h1>
			<div id="individual-side-action">
				<a href="https://www.amazon.co.uk">Order on Amazon<i class="fas fa-chevron-right"></i> </a>
			</div>
		</div>
		<div id="individual-sidebar-other">
			<h3>Similar products</h3>
		</div>
		<div id="individual-sidebar-description">
			<p>LIZA PREMIUM WOODEN STORAGE STOOL BENCH (TAUPE) Shoes. Organiser, Pouffe, Toy Box Chest. Vintage Style Soft Seat Cushion. Solid Nordic Wood - 50 x 45 x 36 cm (Blue Stripes) </p>
		</div>
	
	</div>
</div>



<?php get_footer() ?>