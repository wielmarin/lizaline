jQuery( document ).ready(function() {
// After here


 //* menu *// 
 
 jQuery('#mobilemenuopen').click(function() {
	jQuery('#categories-menu').toggle();
	jQuery('.hamburger').toggleClass('is-active');
 });
 
// Slick Slider
	// function(){
		
var x = window.matchMedia("(min-width: 481px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes 

	function myFunction(x) {
    if (x.matches) { // If media query matches
      
	  
		var windowWidth = jQuery(window).width();
		var gridWidth = jQuery('#grid-container').width();
		var gridSpace = (windowWidth - gridWidth) / 2;
		console.log(gridSpace);
	  jQuery('.slicktopslider').slick({
		speed: 2000,
		prevArrow: '<p class="slick-prev"><img src="/lizaline/wp-content/uploads/2018/08/Back-1.png" width="90px" height="95px"></p>',
		nextArrow: '<p class="slick-next"><img src="/lizaline/wp-content/uploads/2018/08/Next.png" width="90px" height="95px"></p>',
		centerMode: true,
		slidesToShow: 1,
		centerPadding: gridSpace + 'px',
		// lazyLoad: 'progressive',
		autoplay: true,
		autoplaySpeed: 5000,
		pauseOnHover: false,
		pauseOnFocus: false,
	  });
	  
	}
	} // End media query
	// };
	
	var y = window.matchMedia("(max-width: 480px)")
myFunction(y) // Call listener function at run time
y.addListener(myFunction) // Attach listener function on state changes 

	function myFunction(y) {
    if (y.matches) { // If media query matches
      
	  
		var windowWidth = jQuery(window).width();
		var gridWidth = jQuery('#grid-container').width();
		var gridSpace = (windowWidth - gridWidth) / 2;
		console.log(gridSpace);
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
	} // End media query
	
	jQuery(window).resize(function(){		
		jQuery('.slicktopslider').slick('resize');
	});

	

	
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
 
 
  //* hover nieuws *//
  
 jQuery('#thumbnail').hover(function() {
 jQuery('#posttitle').toggleClass('underline');
 });
 
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
 
//END
});