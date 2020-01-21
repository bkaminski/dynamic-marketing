<?php get_header(); ?>
<div class="container mt-5">
	<img class="img-fluid mx-auto d-block pt-5" src="<?php echo get_template_directory_uri(); ?>/assets/img/integrity-sound-solutions-logo2.png" alt="Integrity Sound Solutions" />
	<h1 class="text-center mt-5">Integrity Sound Solutions</h1>
</div>
<div class="container mt-5 mb-5">
	<h2 class="text-center mt-5">Contact Us:</h2>
	<?php get_template_part( 'parts/home', 'contact' ); ?>

</div>
<?php get_footer(); ?>
