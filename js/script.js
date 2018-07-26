jQuery( document ).ready(function() {
// After here

 //* menu *// 
 
 jQuery('#mobilemenuopen').click(function() {
	jQuery('#categories-menu').toggle();
	jQuery('.hamburger').toggleClass('is-active');
 });
 
 // Banner Reveal
 jQuery('.banner-text').delay(2500).slideDown(1500);


 //* hover grid *//
 
 jQuery('.hoverunderline').hover(function() {
 jQuery('.grid-description p', this).toggleClass('underline');
 });
 
 jQuery('#grid-right').hover(function() {
 jQuery('.grid-right-link').toggleClass('underline');
 });

  jQuery('#grid-journal-right').hover(function() {
 jQuery('.grid-journal-right-action').toggleClass('underline');
 });
 
 jQuery('#grid-journal-left-bottom-middle').hover(function() {
 jQuery('#grid-journal-left-bottom-middle-action').toggleClass('underline');
 });
 
  
  // Product list show CTA on Hover
  
 jQuery('.product-list-item').hover(function() {
	jQuery('.product-list-item-cta', this).toggle();
 });
 
   // Product list show CTA on Hover
  
 jQuery('.product-list-item').hover(function() {
	jQuery('.bsnav', this).toggleClass('opacityup');
 });
 
//END
});