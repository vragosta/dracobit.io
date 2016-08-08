<?php

/**
 * Template Name: Browse
 *
 * @package    WordPress
 * @subpackage Dracobit
 * @since      1.0.0
 */



( ! $_GET['view'] ) ? $_GET['view'] = 'topic' : '';

$featured_topic = array();
get_header(); ?>

<div class="dracobit-container container">
	<main class="row">
		<section class="dracobit-browse col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<div class="dracobit-browse-header row">
				<div class="dracobit-browse-title-container col-xs-12 col-sm-12 col-ld-12 col-lg-12">
					<div class="dracobit-browse-title row-fluid">
						<span>Browse</span>
					</div>
					<div class="dracobit-browse-content row-fluid">
						<li class="<?php echo ( $_GET['view'] === 'topic' ) ? 'active' : ''; ?>"><a href="<?php echo home_url( '/browse?view=topic' ); ?>">Topics</a></li>
						<li class="<?php echo ( $_GET['view'] === 'tutorial' ) ? 'active' : ''; ?>"><a href="<?php echo home_url( '/browse?view=tutorial' ); ?>">Tutorials</a></li>
						<li class="<?php echo ( $_GET['view'] === 'chapter' ) ? 'active' : ''; ?>"><a href="<?php echo home_url( '/browse?view=chapter' ); ?>">Chapters</a></li>
					</div>
				</div>
			</div>
			<div class="dracobit-browse-archive row"><?php
				if ( $_GET['view'] == 'topic' ) {
					$args = array(
						'post_type' => 'topic',
						'tax_query' => array(
							array(
								'taxonomy' => 'keywords',
								'field'    => 'slug',
								'terms'    => 'featured',
							),
						),
					);

					$featured = new WP_Query( $args );
					while ( $featured->have_posts() ) : $featured->the_post();
						// Add featured topic to array
						array_push( $featured_topic, $post->ID );

						// Create static meta variables.
						$tutorials    = ( get_post_meta( $post->ID, 'tutorials', true ) ) ? json_decode( get_post_meta( $post->ID, 'tutorials', true ) ) : array();
						$chapters     = ( get_post_meta( $post->ID, 'chapters', true ) ) ? json_decode( get_post_meta( $post->ID, 'chapters', true ) ) : array();
						$contributors = ( get_post_meta( $post->ID, 'contributors', true ) ) ? json_decode( get_post_meta( $post->ID, 'contributors', true ) ) : array();

						// Create meta count variables.
						$tutorials_count    = count( $tutorials );
						$chapters_count     = count( $chapters );
						$contributors_count = count( $contributors );

						// Create meta display variables.
						$tutorials_display    = ( $tutorials_count > 0 ) ? $tutorials_count . ' tutorials' : '';
						$chapters_display     = ( $chapters_count > 0 ) ? $chapters_count . ' chapters' : '';
						$contributors_display = ( $contributors_count > 0 ) ?  $contributors_count . ' contributors' : ''; ?>

						<div class="col-xs-12 col-sm-5 col-md-4 col-lg-6 archive-custom-container featured">
							<a href="<?php echo esc_url( '/topic/' . $post->post_name ); ?>">
								<div class="row-fluid archive-custom">
									<p class="featured-text">Featured</p>
									<div class="row-fluid top-row"><?php
										the_post_thumbnail( 'medium' ); ?>
									</div>
									<div class="row-fluid bottom-row">
										<div class="archive-title"><?php
											echo esc_html( $post->post_title ); ?>
										</div>
										<div class="archive-tutorials"><?php
											echo esc_html( $tutorials_display ); ?>
										</div>
										<div class="archive-chapters"><?php
											echo esc_html( $chapters_display ); ?>
										</div>
										<div class="archive-contributors"><?php
											echo esc_html( $contributors_display ); ?>
										</div>
									</div>
								</div>
							</a>
						</div><?php
					endwhile; wp_reset_postdata();

					$args = array(
						'post_type'      => 'topic',
						'post__not_in'   => $featured_topic,
						'posts_per_page' => -1,
						'orderby'        => 'title',
						'order'          => 'ASC'
					);

					$topics = new WP_Query( $args );
					while ( $topics->have_posts() ) : $topics->the_post(); ?>
						<div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 archive-custom-container topic">
							<a href="<?php echo esc_url( '/tutorial/' . $post->post_name ); ?>">
								<div class="row-fluid archive-custom">
									<div class="row-fluid top-row"><?php
										the_post_thumbnail( 'medium' ); ?>
									</div>
									<div class="row-fluid bottom-row">
										<div class="archive-title"><?php
											echo esc_html( $post->post_title ); ?>
										</div>
									</div>
								</div>
							</a>
						</div><?php
					endwhile; wp_reset_postdata();
				} else if ( $_GET['view'] === 'tutorial' ) {
					$args = array(
						'post_type'      => 'tutorial',
						'posts_per_page' => -1,
						'orderby'        => 'title',
						'order'          => 'ASC'
					);

					$tutorials = new WP_Query( $args );
					while ( $tutorials->have_posts() ) : $tutorials->the_post();

						// Get topic meta from tutorial.
						$topic_meta = ( get_post_meta( $post->ID, 'topic', true ) ) ? json_decode( get_post_meta( $post->ID, 'topic', true ) ) : array();

						// Create topic from tutorial meta.
						$topic = ( isset( $topic_meta ) && ! empty( $topic_meta ) ) ? get_post( $topic_meta ) : '';

						// Get featured image source from tutorial.
						$topic_image = wp_get_attachment_image_src( get_post_thumbnail_id( $topic->ID ), 'single-post-thumbnail' )[0]; ?>

						<div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 archive-custom-container tutorial">
							<a href="<?php echo esc_url( '/tutorial/' . $post->post_name ); ?>">
								<div class="row-fluid archive-custom">
									<div class="row-fluid top-row"><?php
										the_post_thumbnail( 'medium' ); ?>
										<img src="<?php echo esc_url( $topic_image ); ?>" class="archive-topic-image" />
									</div>
									<div class="row-fluid bottom-row">
										<div class="archive-title"><?php
											echo esc_html( $post->post_title ); ?>
										</div>
									</div>
								</div>
							</a>
						</div><?php
					endwhile; wp_reset_postdata();
				} else if ( $_GET['view'] === 'chapter' ) {
					$args = array(
						'post_type'      => 'chapter',
						'posts_per_page' => -1,
						'order'          => 'ASC'
					);

					$chapters = new WP_Query( $args );
					while ( $chapters->have_posts() ) : $chapters->the_post();

						// Get topic and tutorial meta from chapter.
						$topic_meta    = ( get_post_meta( $post->ID, 'topic', true ) ) ? json_decode( get_post_meta( $post->ID, 'topic', true ) ) : array();
						$tutorial_meta = ( get_post_meta( $post->ID, 'tutorial', true ) ) ? $tutorial_meta = get_post_meta( $post->ID, 'tutorial', true ) : $tutorial_meta = array();

						// Create topic/tutorial from chapter meta.
						$topic    = ( isset( $topic_meta ) && ! empty( $topic_meta ) ) ? get_post( $topic_meta ) : '';
						$tutorial = ( isset( $tutorial_meta ) && ! empty( $tutorial_meta ) ) ? get_post( $tutorial_meta ) : '';

						// Get featured image source from chapter.
						$topic_image = wp_get_attachment_image_src( get_post_thumbnail_id( $topic->ID ), 'single-post-thumbnail' )[0]; ?>

						<div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 archive-custom-container chapter">
							<a href="<?php echo esc_url( '/tutorial/' . $post->post_name ); ?>">
								<div class="row-fluid archive-custom">
									<div class="row-fluid top-row">
										<div><?php
											echo esc_html( $post->post_title ); ?>
										</div>
										<div style="color: #333; font-size: 10px; font-weight: 500;">
											Created By Team
										</div>
										<img src="<?php echo esc_url( $topic_image ); ?>" class="archive-topic-image" />
									</div>
									<div class="row-fluid bottom-row">
										<div class="archive-title"><?php
											echo esc_html( $tutorial->post_title ); ?>
										</div>
									</div>
								</div>
							</a>
						</div><?php
					endwhile; wp_reset_postdata();
				} ?>
			</div>
		</section>
	</main>
</div>

<?php get_footer(); ?>
