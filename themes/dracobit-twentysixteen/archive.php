<?php
	get_header();
?>

<div class="tutorial-page-container container">
	<main id="tutorial-nav" class="row">
		<section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<legend>Tutorials Archive</legend>
			<?php get_template_part( 'content', get_post_type() ); ?>
		</section>
	</main>
	<?php get_sidebar( 'tutorial' ); ?>
</div>

<?php get_footer(); ?>
