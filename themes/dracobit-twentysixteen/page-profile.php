<?php get_header(); ?>

<div class="dracobit-container container">
	<main class="row">
    <section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<legend>Profile</legend>
			<?php $comments = get_comments( array( 'post_id' => $post->ID ) ); ?>
			<?php wp_list_comments( array( 'callback' => 'mytheme_comment' ), $comments ); ?>
			<?php comment_form( array( 'title_reply_to' => '' ) ); ?>
    </section>
    <?php get_sidebar( get_post_type() ); ?>
  </main>
</div>

<?php get_footer(); ?>
