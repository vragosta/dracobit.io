<?php get_header(); ?>

<div class="dracobit-container container">
	<main class="row">
    <section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<legend>Profile</legend>
			<div class="row comments-container">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php $comments = get_comments( array( 'post_id' => $post->ID ) ); ?>
					<?php wp_list_comments( array( 'callback' => 'dracobit_profile_template' ), $comments ); ?>
				</div>
				<div id="comment-form-hide">
					<?php
						$args = array(
							'id_form'        => 'commentform-test',
							'class_form'     => 'comment-form-test',
							'title_reply_to' => '',
							'title_reply'    => '',
							'logged_in_as'   => '',
							'comment_field'  => '<p class="comment-form-comment"><textarea id="comment" placeholder="Write something..." name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
							'class_submit'   => 'btn btn-info'
						);
						comment_form( $args );
					?>
				</div>
			</div>
    </section>
    <?php get_sidebar( get_post_type() ); ?>
  </main>
</div>

<?php get_footer(); ?>
