<?php get_header(); ?>

<div class="dracobit-container container">
	<main class="row">
    <section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<legend>Profile</legend>
			<div class="post-comment">
				<div class="row post-menu">
					<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
						<a class="post-menu-item">
							<i class="fa fa-pencil-square"></i>
							<p style="float: left">Post</p>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php
							$post_author = get_user_by( 'id', $post->post_author );

							if ( $post_author == $current_user ) {
								$post_label = 'Update Status';
							} else {
								$post_label = 'Post';
							}

							$args =  array(
								'label_submit'   => $post_label,
								'title_reply_to' => '',
								'title_reply'    => '',
								'logged_in_as'   => '',
								'comment_field'  => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>'
							);

							comment_form( $args );
						?>
					</div>
				</div>
			</div>

			<div class="comments">
				<?php $comments = get_comments( array( 'post_id' => $post->ID ) ); ?>
				<?php wp_list_comments( array( 'callback' => 'mytheme_comment' ), $comments ); ?>
			</div>
    </section>
    <?php get_sidebar( get_post_type() ); ?>
  </main>
</div>

<?php get_footer(); ?>
