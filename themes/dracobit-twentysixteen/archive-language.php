<?php

get_header();
$featured_array = array(); ?>

<div class="dracobit-container container">
	<main class="row-fluid">
		<section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<legend>Tutorials</legend><?php

				$args = array(
					'post_type' => 'tutorial',
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

				array_push( $featured_array, $post->ID );

				// Create static meta variables.
				( get_post_meta( $post->ID, 'chapters', true ) ) ? $chapters = json_decode( get_post_meta( $post->ID, 'chapters', true ) ) : $chapters = array();
				( get_post_meta( $post->ID, 'contributors', true ) ) ? $contributors = json_decode( get_post_meta( $post->ID, 'contributors', true ) ) : $contributors = array();

				// Create meta count variables.
				$chapters_count     = count( $chapters );
				$contributors_count = count( $contributors );

				// Create meta display variables.
				( $chapters_count > 0 ) ? $chapters_display = $chapters_count . ' chapters' : $chapters_display = '';
				( $contributors_count > 0 ) ? $contributors_display = $contributors_count . ' contributors' : $contributors_display = ''; ?>

				<div class="col-xs-12 col-sm-5 col-md-4 col-lg-6 archive-tutorial-container featured">
					<a href="<?php echo esc_url( '/tutorial/' . $post->post_name ); ?>">
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
									echo esc_html( $chapters_display ); ?>
								</div>
								<div class="tutorial-contributors"><?php
									echo esc_html( $contributors_display ); ?>
								</div>
							</div>
						</div>
					</a>
				</div>
				<?php
				endwhile; wp_reset_postdata();

				$args = array(
					'post_type'      => 'tutorial',
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
					</div><?php
				endwhile; wp_reset_postdata(); ?>
		</section>
		<?php get_sidebar( get_post_type() ); ?>
	</main>
</div>

<?php get_footer(); ?>
