<?php

/**
 * Template Name: Browse
 *
 * @package    WordPress
 * @subpackage Dracobit
 * @since      1.0.0
 */

// $view = $_GET['view'];
// ( ! isset( $view ) ) ? $view = 'topic' : $view = '';

get_header(); ?>

<div class="dracobit-container container">
	<main class="row">
		<section class="col-xs-12 col-sm-8 col-md-8 col-lg-8" style="height: 200px; background: #fff; border: 1px solid #333;">
			<div class="dracobit-browse-header row-fluid" style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
				<div class="row-fluid" style="height: 58%; display: flex; flex-direction: column; justify-content: flex-end;">
					<span style="font-size: 32px;">Browse</span>
				</div>
				<div class="dracobit-browse-content row-fluid">
					<li class="<?php echo ( $_GET['view'] === 'topic' ) ? 'active' : ''; ?>"><a href="<?php echo home_url( '/browse?view=topic' ); ?>">Topics</a></li>
					<li class="<?php echo ( $_GET['view'] === 'tutorial' ) ? 'active' : ''; ?>"><a href="<?php echo home_url( '/browse?view=tutorial' ); ?>">Tutorials</a></li>
					<li class="<?php echo ( $_GET['view'] === 'chapter' ) ? 'active' : ''; ?>"><a href="<?php echo home_url( '/browse?view=chapter' ); ?>">Chapters</a></li>
				</div>
			</div>
			<div class="dracobit-browse-archive"><?php
			$args = array(
				'post_type'      => 'topic',
				'post__not_in'   => $featured_array,
				'posts_per_page' => -1,
				'orderby'        => 'title',
				'order'          => 'ASC'
			);

			$tutorials = new WP_Query( $args );
			while ( $tutorials->have_posts() ) : $tutorials->the_post(); ?>
			<div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 archive-tutorial-container">
				<a href="<?php echo esc_url( '/tutorial/' . $post->post_name ); ?>">
					<div class="row-fluid archive-tutorial">
						<div class="row-fluid top-row" style="height: 100px;"><?php
							the_post_thumbnail( 'medium' ); ?>
						</div>
						<div class="row-fluid bottom-row">
							<div class="tutorial-title"><?php
								echo esc_html( $post->post_title ); ?>
							</div>
						</div>
					</div>
				</a>
			</div>
				<!-- <article class="row" style="margin: 10px -15px;">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background: #fff; height: 150px;">
						<div class="row-fluid" style="display: flex; flex-direction: row; align-items: center; height: 100%;">
							<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="height: 90%; background: red;">

							</div>
						</div>
					</div>
				</article> -->
				<?php
			endwhile; wp_reset_postdata(); ?>
			</div>
		</section>
	</main>
</div>

<?php get_footer(); ?>
