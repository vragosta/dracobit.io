<?php get_header(); ?>

<div class="dracobit-container container">
	<main class="row">
    <section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<legend>Profile</legend>
			<div class="row comments-container">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<!-- <div class="col-xs-offset-6 col-sm-offset-6 col-md-offset-6 col-lg-offset-6 col-xs-6 col-sm-6 col-md-6 col-lg-6"> -->
					<?php $comments = get_comments( array( 'post_id' => $post->ID ) ); ?>
					<?php wp_list_comments( array( 'callback' => 'dracobit_profile_template' ), $comments ); ?>
				</div>
			</div>
    </section>
    <?php get_sidebar( get_post_type() ); ?>
  </main>
</div>

<?php get_footer(); ?>
