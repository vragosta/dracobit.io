<?php
	get_header();
?>

<div class="tutorial-page-container container">
	<main id="tutorial-nav" class="row">
		<section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<?php get_template_part( 'content', get_post_type() ); ?>
		</section>
	</main>
	<?php get_sidebar( 'tutorial' ); ?>
</main>

<?php get_footer(); ?>
