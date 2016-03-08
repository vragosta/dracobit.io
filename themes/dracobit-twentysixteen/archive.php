<?php
	get_header();
?>

<main class="tutorial-page-container container">
	<section id="tutorial-nav" class="row">
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<legend>Tutorials Archive</legend>
			<?php get_template_part( 'content', get_post_type() ); ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>
