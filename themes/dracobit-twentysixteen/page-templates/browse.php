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
						( get_post_meta( $post->ID, 'tutorials', true ) ) ? $tutorials = json_decode( get_post_meta( $post->ID, 'tutorials', true ) ) : $tutorials = array();
						( get_post_meta( $post->ID, 'chapters', true ) ) ? $chapters = json_decode( get_post_meta( $post->ID, 'chapters', true ) ) : $chapters = array();
						( get_post_meta( $post->ID, 'contributors', true ) ) ? $contributors = json_decode( get_post_meta( $post->ID, 'contributors', true ) ) : $contributors = array();

						// Create meta count variables.
						$tutorials_count    = count( $tutorials );
						$chapters_count     = count( $chapters );
						$contributors_count = count( $contributors );

						// Create meta display variables.
						( $tutorials_count > 0 ) ? $tutorials_display = $tutorials_count . ' tutorials' : $tutorials_display = '';
						( $chapters_count > 0 ) ? $chapters_display = $chapters_count . ' chapters' : $chapters_display = '';
						( $contributors_count > 0 ) ? $contributors_display = $contributors_count . ' contributors' : $contributors_display = ''; ?>

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

					$tutorials = new WP_Query( $args );
					while ( $tutorials->have_posts() ) : $tutorials->the_post(); ?>
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
					while ( $tutorials->have_posts() ) : $tutorials->the_post(); ?>
					<div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 archive-custom-container tutorial">
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
				} else if ( $_GET['view'] === 'chapter' ) {
					$args = array(
						'post_type'      => 'chapter',
						'posts_per_page' => -1,
						'order'          => 'ASC'
					);

					$chapters = new WP_Query( $args );
					while ( $chapters->have_posts() ) : $chapters->the_post();
						( get_post_meta( $post->ID, 'topic', true ) ) ? $topic_meta = json_decode( get_post_meta( $post->ID, 'topic', true ) ) : $topic_meta = array();
						( get_post_meta( $post->ID, 'tutorial', true ) ) ? $tutorial_meta = get_post_meta( $post->ID, 'tutorial', true ) : $tutorial_meta = array();
						( isset( $topic_meta ) && ! empty( $topic_meta ) ) ? $topic = get_post( $topic_meta ) : $topic = '';
						( isset( $tutorial_meta ) && ! empty( $tutorial_meta ) ) ? $tutorial = get_post( $tutorial_meta ) : '';
						$topic_image = wp_get_attachment_image_src( get_post_thumbnail_id( $topic->ID ), 'single-post-thumbnail' )[0]; ?>
						<div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 archive-custom-container chapter">
							<a href="<?php echo esc_url( '/tutorial/' . $post->post_name ); ?>">
								<div class="row-fluid archive-custom">
									<div class="row-fluid top-row" style="background-image: url( '<?php echo esc_url( $topic_image ); ?>' );">
										<div class=""><?php
											echo esc_html( $post->post_title ); ?>
										</div>
										<div class="" style="color: #333; font-size: 10px; font-weight: 500;">
											Created By Team
										</div>
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
