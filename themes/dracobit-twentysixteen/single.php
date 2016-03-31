<?php get_header(); ?>

<div class="dracobit-container container">
	<main class="row">
		<section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<div class="dracobit-section">
				<?php get_template_part( 'content', get_post_type() ); ?>
			</div>
			<?php if ( 'tutorial' == get_post_type() ) { ?>
				<div class="dracobit-section-blob">
					<?php get_template_part( 'content', 'tutorial-blob' ); ?>
				</div>
			<?php } ?>
			<div class="comments-container">
				<legend>Comments</legend>
				<?php $comments = get_comments( array( 'post_id' => $post->ID ) ); ?>
				<?php wp_list_comments( array( 'callback' => 'dracobit_profile_template' ), $comments ); ?>
			</div>
		</section>
		<?php get_sidebar( get_post_type() ); ?>
	</main>
</main>

<?php get_footer(); ?>
