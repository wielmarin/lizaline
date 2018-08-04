jQuery( document ).ready(function() {
// After here


 //* menu *// 
 
 jQuery('#mobilemenuopen').click(function() {
	jQuery('#categories-menu').toggle();
	jQuery('.hamburger').toggleClass('is-active');
 });
 
 // Banner Reveal
 jQuery('.banner-text').delay(2500).slideDown(1500);

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
 
 
 
 
  //* hover nieuws *//
  
 jQuery('#thumbnail').hover(function() {
 jQuery('#posttitle').toggleClass('underline');
 });
 
 
  
  // Product list show CTA on Hover
  
 jQuery('.product-list-item').hover(function() {
	jQuery('.bsnav', this).toggle();
 });
 
 jQuery('.product-list-item').hover(function() {
	jQuery('.product-list-item-cta', this).toggleClass('opacity8');
 });
 
   // Product list show CTA on Hover
  
 
//END
});