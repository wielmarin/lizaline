<!--- Grid ---->
<div class="grid-container">
	<!-- linker deel grid -->

	<div id="grid-journal-right" class="grid-box extra-large" style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.3) 20%, rgba(255, 255, 255, 0) 40%, rgba(255, 255, 255, 0) 100%), url('<?php the_field('left_box_image'); ?>');">
		<p class="grid-journal-right-title"><?php the_field('left_box_text'); ?></p>
		<a href="<?php the_field('left_box_link_destination'); ?>" class="grid-journal-right-action"><?php the_field('left_box_link_text'); ?></a>
	</div>

			<a href="<?php the_field('grid_link_6')?>" id="grid-journal-left-top-left" class="grid-box smallsquare hoverunderline" style="background-image:url(<?php the_field('grid_item_6')?>); ">
				<?php if(get_field('corner_marker_6')):
						if( get_field('marker_type_6') == 'New' ):
							get_template_part('newmarker');
						else: ?>
							<div id="grid-action"><p><?php the_field('discount_6');?></p></div>
							<span id="triangle-topright"></span>
							<span id="triangle-topright"></span>
						<?php endif;
					endif;?>
				<span id="grid-journal-ltl-description" class="grid-description"><p><?php the_field('grid_description_6')?></p></span>
				
				<div id="cta-grid">View product</div>
			</a>
			
			<a href="<?php the_field('grid_link_7')?>" id="grid-journal-left-top-middle" class="grid-box smallsquare hoverunderline"  style="background-image:url(<?php the_field('grid_item_7')?>); ">
				<?php if(get_field('corner_marker_7')):
						if( get_field('marker_type_7') == 'New' ):
							get_template_part('newmarker');
						else: ?>
							<div id="grid-action"><p><?php the_field('discount_7');?></p></div>
							<span id="triangle-topright"></span>
							<span id="triangle-topright"></span>
						<?php endif;
					endif;?>
				<span id="grid-journal-ltm-description" class="grid-description"><p><?php the_field('grid_description_7')?></p></span>
				<div id="cta-grid">View product</div>
				
			</a>

		<a href="<?php the_field('grid_link_8')?>" id="grid-journal-left-bottom-left" class="grid-box smallsquare hoverunderline" style="background-image:url(<?php the_field('grid_item_8')?>); ">
					<?php if(get_field('corner_marker_8')):
						if( get_field('marker_type_8') == 'New' ):
							get_template_part('newmarker');
						else: ?>
							<div id="grid-action"><p><?php the_field('discount_8');?></p></div>
							<span id="triangle-topright"></span>
							<span id="triangle-topright"></span>
						<?php endif;
					endif;?>
				<span id="grid-journal-lbl-description" class="grid-description"><p><?php the_field('grid_description_8')?></p></span>
				<div id="cta-grid">View product</div>
		</a>
		
		<div id="grid-journal-left-bottom-middle" class="grid-box smallsquare hoverunderline" style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.2) 0%, rgba(255, 255, 255, 0.3) 20%, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.3) 100%), url(<?php the_field('bottom_right_box_image'); ?>);">
			<div id="grid-journal-left-bottom-middle-text"><p><?php the_field('bottom_right_box_text_1'); ?></p></div>
			<a href="<?php the_field('bottom_right_box_link_destination'); ?>" id="grid-journal-left-bottom-middle-action"><?php the_field('bottom_right_box_link_text'); ?></a>
		</div>
</div>

<script>
	jQuery('#grid-journal-left-bottom-middle').mouseenter(function() {
		jQuery('#grid-journal-left-bottom-middle').css('background-image','linear-gradient(to bottom, rgba(255, 255, 255, 0.5) 0%, rgba(255, 255, 255, 0.5) 20%, rgba(255, 255, 255, 0.5) 40%, rgba(255, 255, 255, 0.5) 100%), url(<?php the_field('bottom_right_box_image'); ?>)');
	});
	jQuery('#grid-journal-left-bottom-middle').mouseleave(function() {
		jQuery('#grid-journal-left-bottom-middle').css('background-image','linear-gradient(to bottom, rgba(255, 255, 255, 0.2) 0%, rgba(255, 255, 255, 0.3) 20%, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.3) 100%), url(<?php the_field('bottom_right_box_image'); ?>)');
	});

</script>


<!-- End Grid -->