<?php
	get_header();
?>

<div class="tutorial-page-container container">
	<main id="tutorial-nav" class="row">
		<section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<div class="tutorial-section">
				<?php get_template_part( 'content', get_post_type() ); ?>
			</div>
		</section>
		<?php get_sidebar( get_post_type() ); ?>
	</main>
</main>

<?php get_footer(); ?>
