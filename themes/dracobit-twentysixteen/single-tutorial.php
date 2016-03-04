<?php
	get_header();
	$tutorials = new WP_Query( array( 'post_type' => 'tutorial', 'order' => 'ASC' ) );
?>

<main class="tutorial-page-container container">
	<section id="tutorial-content" class="row">
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<?php
				if ( $tutorials->have_posts() ) {
					while ( $tutorials->have_posts() ) : $tutorials->the_post(); ?>
					<div id="tutorial-<?php echo $post->post_name; ?>-container" class="tutorial-container">
					<?php the_content(); ?>
					</div>
					<?php endwhile;
				}
			?>
		</main>
		<?php get_sidebar( 'tutorial' ); ?>
	</section>
</div>

<?php get_footer(); ?>
