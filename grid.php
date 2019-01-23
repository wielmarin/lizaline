<!--- Grid ---->
<div class="grid-container">
	<!-- linker deel grid -->
		<!-- Boven -->

			<div id="grid-left-top-left" class="grid-box smallsquare hoverunderline" style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0.4) 20%, rgba(255, 255, 255, 0.4) 40%, rgba(255, 255, 255, 0.4) 100%), url(<?php the_field('new_box_image'); ?>);">
				<div id="wordnew">
					<span id="lettern" class="newletter">N</span><span id="lettere" class="newletter">E</span><span id="letterw" class="newletter">W</span>
				</div>
			</div>
			<a href="<?php the_field('grid_link_1')?>" id="grid-left-top-middle" class="grid-box smallsquare hoverunderline" style="background-image: url(<?php the_field('grid_item_1')?>); ">
				<?php if(get_field('corner_marker_1')):
						if( get_field('marker_type_1') == 'New' ):
							get_template_part('newmarker');
						else: ?>
							<div id="grid-action"><p><?php the_field('discount_1');?></p></div>
							<span id="triangle-topright"></span>
							<span id="triangle-topright"></span>
						<?php endif;
					endif;?>
				<span id="grid-ltm-description" class="grid-description"><p><?php the_field('grid_description_1')?></p></span>
				<div id="cta-grid">View product</div>
				
			</a>
			
			<a href="<?php the_field('grid_link_2')?>" id="grid-left-top-right" class="grid-box smallsquare hoverunderline" style="background-image: url(<?php the_field('grid_item_2')?>); ">
				<?php if(get_field('corner_marker_2')):
						if( get_field('marker_type_2') == 'New' ):
							get_template_part('newmarker');
						else: ?>
							<div id="grid-action"><p><?php the_field('discount_2');?></p></div>
							<span id="triangle-topright"></span>
							<span id="triangle-topright"></span>
						<?php endif;
					endif;?>
				<span id="grid-ltm-description" class="grid-description"><p><?php the_field('grid_description_2')?></p></span>
				<div id="cta-grid">View product</div>
				
			</a>		

	<div id="grid-right" class="grid-box largesquare" style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.3) 20%, rgba(255, 255, 255, 0) 40%, rgba(255, 255, 255, 0) 100%), url('<?php the_field('top_right_box_image'); ?>');">
		<p class="grid-right-title title-flexbox"><?php the_field('top_right_box_text_1'); ?></p>
		<p class="grid-right-subtitle title-flexbox"><?php the_field('top_right_box_text_2'); ?></p>
		<a href="<?php the_field('top_right_box_link_destination'); ?>" class="grid-right-link title-flexbox"><?php the_field('top_right_box_link_text'); ?></a>
	</div>

			<a href="<?php the_field('grid_link_3')?>" id="grid-left-bottom-left" class="grid-box smallsquare hoverunderline" style="background-image:url(<?php the_field('grid_item_3')?>); ">
				<?php if(get_field('corner_marker_3')):
						if( get_field('marker_type_3') == 'New' ):
							get_template_part('newmarker');
						else: ?>
							<div id="grid-action"><p><?php the_field('discount_3');?></p></div>
							<span id="triangle-topright"></span>
							<span id="triangle-topright"></span>
						<?php endif;
					endif;?>
				<span id="grid-ltm-description" class="grid-description"><p><?php the_field('grid_description_3')?></p></span>
				<div id="cta-grid">View product</div>
				
			</a>
			
			<a href="<?php the_field('grid_link_4')?>" id="grid-left-bottom-middle" class="grid-box smallsquare hoverunderline" style="background-image:url(<?php the_field('grid_item_4')?>); ">
					<?php if(get_field('corner_marker_4')):
						if( get_field('marker_type_4') == 'New' ):
							get_template_part('newmarker');
						else: ?>
							<div id="grid-action"><p><?php the_field('discount_4');?></p></div>
							<span id="triangle-topright"></span>
							<span id="triangle-topright"></span>
						<?php endif;
					endif;?>
				<span id="grid-ltm-description" class="grid-description"><p><?php the_field('grid_description_4')?></p></span>
				<div id="cta-grid">View product</div>
				
			</a>

			<a href="<?php the_field('grid_link_5')?>" id="grid-left-bottom-right" class="grid-box smallsquare hoverunderline" style="background-image:url(<?php the_field('grid_item_5')?>); ">
					<?php if(get_field('corner_marker_5')):
						if( get_field('marker_type_5') == 'New' ):
							get_template_part('newmarker');
						else: ?>
							<div id="grid-action"><p><?php the_field('discount_5');?></p></div>
							<span id="triangle-topright"></span>
							<span id="triangle-topright"></span>
						<?php endif;
					endif;?>
				<span id="grid-ltm-description" class="grid-description"><p><?php the_field('grid_description_5')?></p></span>
				<div id="cta-grid">View product</div>
				
			</a>

	


	


</div>


<!-- End Grid -->