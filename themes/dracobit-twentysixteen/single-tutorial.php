<?php
	get_header();
?>

<main class="tutorial-page-container container">
	<section id="tutorial-content" class="row">
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<div id="tutorial-<?php echo $post->post_name; ?>-container" class="tutorial-container">
				<?php echo $post->post_content; ?>
			</div>
		</main>
		<?php get_sidebar( 'tutorial' ); ?>
	</section>
</div>

<?php get_footer(); ?>
