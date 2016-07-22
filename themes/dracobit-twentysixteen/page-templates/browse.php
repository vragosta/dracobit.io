<?php

/**
 * Template Name: Browse
 *
 * @package    WordPress
 * @subpackage Dracobit
 * @since      1.0.0
 */

( ! $_GET['view'] ) ? $_GET['view'] = 'topic' : '';
$featured_topic= array();

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
				if ( $_GET['view'] == 'topic' ) :
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
						( get_post_meta( $post->ID, 'contributors', true ) ) ? $contributors = json_decode( get_post_meta( $post->ID, 'contributors', true ) ) : $contributors = array();

						// Create meta count variables.
						$tutorials_count    = count( $tutorials );
						$contributors_count = count( $contributors );

						// Create meta display variables.
						( $tutorials_count > 0 ) ? $tutorials_display = $tutorials_count . ' tutorials' : $tutorials_display = '';
						( $contributors_count > 0 ) ? $contributors_display = $contributors_count . ' contributors' : $contributors_display = ''; ?>

						<div class="col-xs-12 col-sm-5 col-md-4 col-lg-6 archive-tutorial-container featured">
							<a href="<?php echo esc_url( '/topic/' . $post->post_name ); ?>">
								<div class="row-fluid archive-tutorial">
									<p class="featured-text">Featured</p>
									<div class="row-fluid top-row"><?php
										the_post_thumbnail( 'medium' ); ?>
									</div>
									<div class="row-fluid bottom-row">
										<div class="tutorial-title"><?php
											echo esc_html( $post->post_title ); ?>
										</div>
										<div class="tutorial-chapters"><?php
											echo esc_html( $tutorials_display ); ?>
										</div>
										<div class="tutorial-contributors"><?php
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
					<div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 archive-tutorial-container">
						<a href="<?php echo esc_url( '/tutorial/' . $post->post_name ); ?>">
							<div class="row-fluid archive-tutorial">
								<div class="row-fluid top-row"><?php
									the_post_thumbnail( 'medium' ); ?>
								</div>
								<div class="row-fluid bottom-row">
									<div class="tutorial-title"><?php
										echo esc_html( $post->post_title ); ?>
									</div>
								</div>
							</div>
						</a>
					</div><?php
					endwhile; wp_reset_postdata(); ?>
				</div><?php
			endif; ?>
		</section>
	</main>
</div>

<?php get_footer(); ?>
