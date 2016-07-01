<?php get_header(); ?>

<div class="dracobit-container container">
	<main class="row">
		<section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<legend>Chapters</legend>
			<div class="dracobit-section"><?php
				$args = array(
					'post_type' => 'chapter',
				);
				$chapters = new WP_Query( $args );
				while ( $chapters->have_posts() ) : $chapters->the_post();
				// echo '<pre>'; var_dump( $post ); echo '<pre>';
				( get_post_meta( $post->ID, 'version', true ) ) ? $version = get_post_meta( $post->ID, 'version', true ) : $version = '1.0';
				( get_post_meta( $post->ID, 'tagline', true ) ) ? $tagline = get_post_meta( $post->ID, 'tagline', true ) : $tagline = '';
				( get_post_meta( $post->ID, 'short_description', true ) ) ? $short_description = get_post_meta( $post->ID, 'short_description', true ) : $short_description = '';
				$author = get_user_by( 'id', $post->post_author ); ?>
					<div class="list-group" style="height: 250px;">
						<div class="row list-group-item archive-item">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 chapter-photo">
								<img src="#" />
							</div>
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 chapter-content">
								<div class="row chapter-top-row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="row">
											<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 chapter-title">
												<a href="/chapter/<?php echo $post->post_name; ?>"><?php echo esc_html( $post->post_title ); ?></a>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 chapter-version-container">
												<a href="/edit-form?id=<?php echo $post->ID; ?>" class="chapter-edit-button">Edit</a>
												<a href="#" class="chapter-version"><?php echo esc_html( $version ); ?></a>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<a href="/user/<?php echo $author->post_name; ?>" class="chapter-author"><?php echo esc_html( $author->display_name ); ?></a><?php echo ' | ' . esc_html( $post->post_date ); ?>
											</div>
										</div>
									</div>
								</div>
								<div class="row chapter-center-row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 chapter-tagline"><?php echo esc_html( $tagline ); ?></div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 chapter-short-description"><?php echo $esc_html( $short_description ); ?></div>
										</div>
									</div>
								</div>
								<div class="row chapter-bottom-row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 chapter-keywords-container">
												<!-- Keywords -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				endwhile;
				wp_reset_postdata(); ?>
			</div>
		</section>
		<?php get_sidebar( get_post_type() ); ?>
	</main>
</div>

<?php get_footer(); ?>
