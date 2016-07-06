<?php get_header(); ?>

<div class="dracobit-container container">
	<main class="row">
		<section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<legend><?php echo $post->post_title; ?></legend><?php
			$chapters_meta = json_decode( get_post_meta( $post->ID, 'chapters', true ) );
			$args = array(
				'post_type'      => 'chapter',
				'post__in'       => $chapters_meta,
				'posts_per_page' => -1
			);
			$chapters = new WP_Query( $args );
			while ( $chapters->have_posts() ) : $chapters->the_post();
				$author = get_user_by( 'id', $post->post_author );
				( get_post_meta( $post->ID, 'version', true ) ) ? $version = get_post_meta( $post->ID, 'version', true ) : $version = '1.0'; ?>
				<div class="row-fluid">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="height: 150px; padding: 10px;">
						<div class="row-fluid" style="height: 100%; background: #fff; border: 1px solid #333; box-shadow: -5px 5px 0 0 rgba(0,0,0,.05); padding: 5px;">
							<div class="row-fluid">
								<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
									<p style="margin: 0; color: #bf3939; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo $post->post_title; ?></p>
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="display: flex; justify-content: flex-end;">
									<p style="margin: 0;"><?php echo $version; ?></p>
								</div>
							</div>
							<div class="row-fluid">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<a href="<?php echo esc_url( '/user/' . $author->nice_name ); ?>" style="color: #333;"><?php echo $author->display_name; ?></a>
								</div>
							</div>
						</div>
					</div>
				</div><?php
			endwhile; wp_reset_postdata(); ?>
		</section>
		<?php get_sidebar( get_post_type() ); ?>
	</main>
</main>

<?php get_footer(); ?>
