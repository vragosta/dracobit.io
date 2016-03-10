<?php

get_header(); ?>

<div class="dracobit-container container">
	<main class="row">
    <section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<legend>News Feed</legend>
			<div class="<?php echo get_post_type(); ?>-section">
				<?php get_template_part( 'content', get_post_type() ); ?>
			</div>
		</section>
  </main>
  <?php get_sidebar( get_post_type() ); ?>
</div>

<?php get_footer(); ?>
