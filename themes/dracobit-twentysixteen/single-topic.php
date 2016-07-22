<?php get_header(); ?>

<div class="dracobit-container container">
	<main class="row">
		<section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<legend><?php echo $post->post_title; ?></legend><?php
			$init_count = 0;
			$tutorials_meta = json_decode( get_post_meta( $post->ID, 'tutorials', true ) );
			$args = array(
				'post_type'      => 'tutorial',
				'post__in'       => $tutorials_meta,
				'posts_per_page' => -1
			);
			$tutorials = new WP_Query( $args );
			while ( $tutorials->have_posts() ) : $tutorials->the_post();
				$author = get_user_by( 'id', $post->post_author );
				echo $post->post_title;
			endwhile; wp_reset_postdata(); ?>
		</section>
		<?php get_sidebar( get_post_type() ); ?>
	</main>
</main>

<?php get_footer(); ?>
