<?php

	get_header();

	$tutorials = new WP_Query( array( 'post_type' => 'tutorial', 'order' => 'ASC' ) );
?>

<div id="tutorials-page-container" class="container">
	<div class="row">
		<main id="tutorials-content" class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<?php
				if ( $tutorials->have_posts() ) {
					while ( $tutorials->have_posts() ) : $tutorials->the_post(); ?>
					<div id="tutorials-<?php echo $post->post_name; ?>-container" class="tutorials-container">
					<?php the_content(); ?>
					</div>
					<?php endwhile;
				}
			?>
		</main>
		<?php get_sidebar( 'tutorial' ); ?>
	</div>
</div>

<?php get_footer(); ?>
