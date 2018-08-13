<?php get_header(); ?>

<!--- Blogs page ---->

<!----------------- THE CONTENT --------------->
<div id="title-about">
	<h1>Contact</h1>
	<h2>Liza Line</h2>
</div>

<div class="flex-containercontact">
	<div class="flex-itemcontactform">
		<div class="titlecontact"><h3><b>Contact form</b></h3></div>
		<div class="contactform"><?php echo do_shortcode('[contact-form-7 id="179" title="Contactform"]'); ?></div>
	</div>
		
	<div class="flex-itemcontactinfo">
		<div class="titlecontact"><h3><b>Contact information</b></h3></div>
		<div class="contact-info">T +3412345678</div>
		<div class="contact-info">E info@email.es</div>
		<div class="contact-info"><i class="fab fa-facebook-f fa-lg"></i>
		<i class="fab fa-instagram fa-lg"></i></div>
	
	
	</div>
</div>

<?php get_footer(); ?>