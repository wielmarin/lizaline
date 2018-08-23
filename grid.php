<!--- Grid ---->
<div id="grid-container">
	<!-- linker deel grid -->
		<!-- Boven -->

			<div id="grid-left-top-left" class="grid-box smallsquare hoverunderline">
				<div id="wordnew">
					<span id="lettern" class="newletter">N</span><span id="lettere" class="newletter">E</span><span id="letterw" class="newletter">W</span>
				</div>
			</div>
			<a href="<?php the_field('grid_link_1')?>" id="grid-left-top-middle" class="grid-box smallsquare hoverunderline" style="background-image: url(<?php the_field('grid_item_1')?>);">

				<span id="grid-ltm-description" class="grid-description"><p><?php the_field('grid_description_1')?></p></span>
				<div id="cta-grid">View product</div>
				
			</a>
			
			<a href="<?php the_field('grid_link_2')?>" id="grid-left-top-right" class="grid-box smallsquare hoverunderline" style="background-image: url(<?php the_field('grid_item_2')?>);">
				<?php get_template_part('newmarker'); ?>
				<span id="grid-ltm-description" class="grid-description"><p><?php the_field('grid_description_2')?></p></span>
				<div id="cta-grid">View product</div>
				
			</a>		

	<div id="grid-right" class="grid-box largesquare">
		<p class="grid-right-title title-flexbox">Decorative</p>
		<p class="grid-right-subtitle title-flexbox">Wall shelves</p>
		<p class="grid-right-link title-flexbox">Explore</p>
	</div>

			<a href="<?php the_field('grid_link_3')?>" id="grid-left-bottom-left" class="grid-box smallsquare hoverunderline" style="background-image:url(<?php the_field('grid_item_3')?>);">

				<span id="grid-ltm-description" class="grid-description"><p><?php the_field('grid_description_3')?></p></span>
				<div id="cta-grid">View product</div>
				
			</a>
			
			<a href="<?php the_field('grid_link_4')?>" id="grid-left-bottom-middle" class="grid-box smallsquare hoverunderline" style="background-image:url(<?php the_field('grid_item_4')?>);">
				<?php get_template_part('SALEMARKER3'); ?>
				<span id="grid-ltm-description" class="grid-description"><p><?php the_field('grid_description_4')?></p></span>
				<div id="cta-grid">View product</div>
				
			</a>

			<a href="<?php the_field('grid_link_5')?>" id="grid-left-bottom-right" class="grid-box smallsquare hoverunderline" style="background-image:url(<?php the_field('grid_item_5')?>);">

				<span id="grid-ltm-description" class="grid-description"><p><?php the_field('grid_description_5')?></p></span>
				<div id="cta-grid">View product</div>
				
			</a>

	


	


</div>


<!-- End Grid -->