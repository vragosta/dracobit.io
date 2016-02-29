<?php

	get_header();

	$tutorials = new WP_Query( array( 'post_type' => 'tutorial', 'order' => 'ASC' ) );
?>

<div id="tutorials-page-container" class="container">
	<div class="row">
		<nav id="tutorials-nav-menu" class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
			<legend>Tutorials</legend>
			<div class="list-group">
			<?php if ( $tutorials->have_posts() ) {
				while ( $tutorials->have_posts() ) : $tutorials->the_post(); ?>
					<a href="#tutorial-<?php echo $post->post_name; ?>" class="list-group-item" name="<?php echo $post->post_name; ?>">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h4 class="list-group-item-heading"><?php the_title(); ?></h4>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<p id="tutorials-version">v<?php echo get_post_meta( $post->ID, 'version', true); ?></p>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<p class="list-group-item-text"><?php echo get_post_meta( $post->ID, 'tagline', true ); ?></p>
							</div>
						</div>
					</a>
					<?php endwhile;
				}
			?>
			</div>
		</nav>
		<main id="tutorials-content" class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
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
