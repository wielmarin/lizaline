jQuery( document ).ready(function() {
// After here


 //* menu *// 
 
 jQuery('#mobilemenuopen').click(function() {
	jQuery('#categories-menu').toggle();
	jQuery('.hamburger').toggleClass('is-active');
 });
 
	//Submenu	
	jQuery('#menu-item-294').hover(function() {
		jQuery('.site-header').toggleClass('bannershift', 500);
		jQuery('.sub-menu').toggle('slide',{direction:'up'}, 500); 
	});
	
	
	
	
// Slider
	  
	  	function mediaSize() { 
		/* Set the matchMedia */
		if (window.matchMedia('(min-width: 481px)').matches) {
			
			
		var windowWidth = jQuery(window).width();
		var gridWidth = jQuery('.grid-container').width();
		var gridSpace = (windowWidth - gridWidth) / 2;
	  jQuery('.slicktopslider').slick({
		speed: 2000,
		prevArrow: '<p class="slick-prev"><img src="/lizaline/wp-content/uploads/2018/08/Back-1.png" width="90px" height="95px"></p>',
		nextArrow: '<p class="slick-next"><img src="/lizaline/wp-content/uploads/2018/08/Next.png" width="90px" height="95px"></p>',
		centerMode: true,
		slidesToShow: 1,
		centerPadding: '3%',
		lazyLoad: 'progressive',
		autoplay: true,
		autoplaySpeed: 5000,
		pauseOnHover: false,
		pauseOnFocus: false,
	  });
	 

} else {
	
		var windowWidth = jQuery(window).width();
		var gridWidth = jQuery('.grid-container').width();
		var gridSpace = (windowWidth - gridWidth) / 2;
	  jQuery('.slicktopslider').slick({
		speed: 1000,
		prevArrow: '<p class="slick-prev"><img src="/lizaline/wp-content/uploads/2018/08/Back-1.png" width="90px" height="95px"></p>',
		nextArrow: '<p class="slick-next"><img src="/lizaline/wp-content/uploads/2018/08/Next.png" width="90px" height="95px"></p>',
	
		slidesToShow: 1,
		
		// lazyLoad: 'progressive',
		autoplay: true,
		autoplaySpeed: 5000,
		pauseOnHover: false,
		pauseOnFocus: false,
	  });
	
		}
	};
	
	/* Call the function */
  mediaSize();
  /* Attach the function to the resize event listener */
	window.addEventListener('resize', mediaSize, false);  
	
/*
jQuery(window).resize(function(){		
		jQuery('.slicktopslider').slick('resize');
	});
*/

// Keep grid blocks square
				
				
	  	function gridSize() { 
		/* Set the matchMedia */
		if (window.matchMedia('(min-width: 741px)').matches) {

				// Keep grid blocks square
				// Get width of block
				var singleblockheight = jQuery('.smallsquare').width();
				var gridrowheight = "repeat(2, " + singleblockheight + "px)";
				// Apply to grid rows
				jQuery('.grid-container').css(
						"grid-template-rows", gridrowheight
				);
				
				
				// Refresh on window resize
				jQuery(window).bind('resize', function(e)
				{
					var singleblockheight = jQuery('.smallsquare').width();
					var gridrowheight = "repeat(2, " + singleblockheight + "px)";
					// Apply to grid rows
					jQuery('.grid-container').css(
							"grid-template-rows", gridrowheight
					);
				});


		
				
		} else {
			
			// Get width of block
				var singleblockheight = jQuery('.smallsquare').width();
				var gridrowheight = "repeat(5, " + singleblockheight + "px)"
				// Apply to grid rows
				jQuery('.grid-container').css(
						"grid-template-rows", gridrowheight
				);
				
				
				// Refresh on window resize
				jQuery(window).bind('resize', function(e)
				{
					var singleblockheight = jQuery('.smallsquare').width();
					var gridrowheight = "repeat(5, " + singleblockheight + "px)"
					// Apply to grid rows
					jQuery('.grid-container').css(
							"grid-template-rows", gridrowheight
					);
				});
			
			
			
		}
	};
	gridSize();
  /* Attach the function to the resize event listener */
	window.addEventListener('resize', gridSize, false);	
		
	
	
	/// EXCERPT BLOK GRID
	
	//refresh page on browser resize
		/*
		jQuery(window).bind('resize', function(j)
				{
	var excerptblockheight = jQuery('#excerptblock:nth-of-type(2)').width();
				
				var excerptrowheight = "repeat(4, " + excerptblockheight + "px)"
				
				// Apply to grid rows
				jQuery('#excerptcontainer').css(
						"grid-template-rows", excerptrowheight
				);
	
				}); 
		*/
	
	
 // Journal Reveal
 jQuery('#title-journal').delay(3000).slideDown(2000);

 //* hover grid *//
 
 jQuery('.hoverunderline').hover(function() {
 jQuery('.grid-description p', this).toggleClass('underline');
 });
 
 jQuery('.grid-box').hover(function() {
 jQuery('.grid-right-link').toggleClass('underline');
 });

  jQuery('#grid-journal-right').hover(function() {
 jQuery('.grid-journal-right-action').toggleClass('underline');
 });
 
 jQuery('#grid-journal-left-bottom-middle').hover(function() {
 jQuery('#grid-journal-left-bottom-middle-action').toggleClass('underline');
 });
 
 // Typed effect in grid

function animateNew(){ 
var seconds = 800;
	jQuery('.newletter').css('opacity',0);
	 setTimeout( function(){
		jQuery('#lettern').css('opacity',1);
		   }, seconds);
	 setTimeout( function(){
		jQuery('#lettere').css('opacity',1);
		   }, seconds * 2);
	 setTimeout( function(){
		jQuery('#letterw').css('opacity',1);
		   },seconds * 3);
	setTimeout (animateNew, seconds * 4);
}
animateNew();
 
 
  /* hover nieuws 
  
 jQuery('#thumbnail').hover(function() {
 jQuery('#posttitle').toggleClass('underline');
 });
*/ 
jQuery('.hoverunderline').hover(function() {
	jQuery('#posttitle h2', this).toggleClass('underline');
});
 

 
  
  // Product list show CTA on Hover
  
 jQuery('.product-list-item').hover(function() {
	jQuery('.bsnav', this).toggle();
 });
 
 jQuery('.product-list-item').hover(function() {
	jQuery('.product-list-item-cta', this).toggleClass('opacity8');
 });
 
   // Product list show CTA on Hover
 
 jQuery('#grid-left-top-middle').hover(function() {
	jQuery('#cta-grid', this).toggle();
 });
 
 jQuery('#grid-left-top-right').hover(function() {
	jQuery('#cta-grid', this).toggle();
 });
 
  
 jQuery('#grid-left-bottom-left').hover(function() {
	jQuery('#cta-grid', this).toggle();
 });
 
  jQuery('#grid-left-bottom-middle').hover(function() {
	jQuery('#cta-grid', this).toggle();
 });
 
  jQuery('#grid-left-bottom-right').hover(function() {
	jQuery('#cta-grid', this).toggle();
 });
 
   jQuery('#grid-journal-left-top-left').hover(function() {
	jQuery('#cta-grid', this).toggle();
 });
 
    jQuery('#grid-journal-left-top-middle').hover(function() {
	jQuery('#cta-grid', this).toggle();
 });
 
     jQuery('#grid-journal-left-bottom-left').hover(function() {
	jQuery('#cta-grid', this).toggle();
 });
 
   // About
   
       jQuery('.button-about').click(function() {
	jQuery('.hiddentext').show();
	jQuery('.button-about').hide();
 }); 
   
//END
});