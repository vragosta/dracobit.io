<?php get_header(); ?>

<div class="dracobit-container container">
	<main class="row">
    <section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<legend>Profile</legend>
			<div class="row">
				<input type="hidden" name="current-user-id" value="<?php echo esc_attr( $current_user->ID ); ?>" />
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row-fluid add-chapter-container">
						<a href="<?php echo home_url('upload'); ?>" class="btn btn-info">Add Chapter <i class="fa fa-plus" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="dracobit-section">
						<?php get_template_part( 'content', 'chapter' ); ?>
					</div>
				</div>
			</div>
    </section>
    <?php get_sidebar( get_post_type() ); ?>
  </main>
</div>

<?php get_footer(); ?>
