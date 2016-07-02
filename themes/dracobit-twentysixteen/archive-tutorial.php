<?php get_header(); ?>

<div class="dracobit-container container">
	<main class="row-fluid">
		<section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<legend>Tutorials</legend>
			<div class="row-fluid dracobit-section"><?php
				$tutorials = new WP_Query( array( 'post_type' => 'tutorial' ) );
				while ( $tutorials->have_posts() ) : $tutorials->the_post();

					// Create static variables.
					( get_post_meta( $post->ID, 'chapters', true ) ) ? $chapters = json_decode( get_post_meta( $post->ID, 'chapters', true ) ) : $chapters = array();
					$chapters_count = count( $chapters );
					( $chapters_count > 0 ) ? $chapters_display = $chapters_count . ' chapters' : $chapters_display = ''; ?>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 archive-tutorial-container">
						<div class="row-fluid top-row"><?php
							the_post_thumbnail( 'medium' ); ?>
						</div>
						<div class="row-fluid bottom-row">
							<div class="tutorial-title"><?php
								echo esc_html( $post->post_title ); ?>
							</div>
							<div class="tutorial-chapters"><?php
								echo $chapters_display; ?>
							</div>
						</div>
					</div>
				<?php endwhile;
				wp_reset_postdata(); ?>
			</div>
		</section>
		<?php get_sidebar( get_post_type() ); ?>
	</main>
</div>

<?php get_footer(); ?>
