<!--- Grid ---->
<div id="grid-container">
	<!-- linker deel grid -->

	<div id="grid-journal-right" class="grid-box extra-large">
		<p class="grid-journal-right-title">Ideas & inspiration</p>
		<p class="grid-journal-right-action">Have a look at our journal</p>
	</div>

			<a href="<?php the_field('grid_link_6')?>" id="grid-journal-left-top-left" class="grid-box smallsquare hoverunderline" style="background-image:url(<?php the_field('grid_item_6')?>);">
				<?php get_template_part('newmarker'); ?>
				<span id="grid-journal-ltl-description" class="grid-description"><p><?php the_field('grid_description_6')?></p></span>
				
				<div id="cta-grid">View product</div>
			</a>
			
			<a href="<?php the_field('grid_link_7')?>" id="grid-journal-left-top-middle" class="grid-box smallsquare hoverunderline"  style="background-image:url(<?php the_field('grid_item_7')?>);">
				<span id="grid-journal-ltm-description" class="grid-description"><p><?php the_field('grid_description_7')?></p></span>
				<div id="cta-grid">View product</div>
				
			</a>

		<a href="<?php the_field('grid_link_8')?>" id="grid-journal-left-bottom-left" class="grid-box smallsquare hoverunderline" style="background-image:url(<?php the_field('grid_item_8')?>);">
			<?php get_template_part('salemarker'); ?>
				<span id="grid-journal-lbl-description" class="grid-description"><p><?php the_field('grid_description_8')?></p></span>
				<div id="cta-grid">View product</div>
		</a>
		
		<div id="grid-journal-left-bottom-middle" class="grid-box smallsquare hoverunderline">
			<div id="grid-journal-left-bottom-middle-text"><p>Handmade & Natural</p></div>
			<div id="grid-journal-left-bottom-middle-action"><p>Read more</p></div>
		</div>

	


</div>


<!-- End Grid -->