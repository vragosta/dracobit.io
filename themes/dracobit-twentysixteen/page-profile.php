<?php get_header(); ?>

<div class="dracobit-container container">
	<main class="row">
    <section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<legend>Profile</legend>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="dracobit-section">
						<?php get_template_part( 'content', 'profile-chapter' ); ?>
					</div>
				</div>
			</div>
    </section>
    <?php get_sidebar( get_post_type() ); ?>
  </main>
</div>

<?php get_footer(); ?>
