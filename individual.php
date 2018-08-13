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

<div id="individual-container">
	<div id="individual-grid">
		<h1 id="individual-grid-title" class="grid-box">
			Product Title
		</h1>
		<div id="individual-grid-small-photo-1" class="individual-grid-small-photo grid-box" style="background-image: url('<?php echo $product1 ?>')">
			
		</div>
		<div id="individual-grid-small-photo-2" class="individual-grid-small-photo grid-box" style="background-image: url('<?php echo $product2 ?>')">
		
		</div>
		<div id="individual-grid-small-photo-3" class="individual-grid-small-photo grid-box" style="background-image: url('<?php echo $product3 ?>')">
		
		</div>
		<div id="individual-grid-large-photo-1" class="individual-grid-large-photo grid-box" style="background-image: url('<?php echo $product1 ?>')">
		
		</div>
		<div id="individual-grid-features" class="grid-box">
			<h3>
				Product Features
			</h3>
			<div id="individual-grid-features-list">
				<p><i class="fas fa-check"></i>Quality materials and neat finishing</p>
				<p><i class="fas fa-check"></i>Modular and multi-functional</p>
				<p><i class="fas fa-check"></i>Vintage style</p>
				<p><i class="fas fa-check"></i>Express mounting</p>
			</div>

		</div>
	</div>

	<div id="individual-sidebar">
		<h1 id="individual-side-title">
			£89.00 
		</h1>
		<div id="individual-side-action">
			<a href="https://www.amazon.co.uk">Order on Amazon <i class="fab fa-amazon"></i></a>
		</div>
		<p id="individual-side-option">
			If the product is out of stock, <a href="http://localhost/lizaline/wooden-storage-benches/"> check similar storage stool benches ></a>
		</p>
	</div>
</div>



<?php get_footer() ?>