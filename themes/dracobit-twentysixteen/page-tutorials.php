<?php

	get_header();

	$tutorials = new WP_Query( array( 'post_type' => 'tutorial', 'order' => 'ASC' ) );
?>

<div class="container" style="margin-top: 40px;">
	<div class="row">
		<nav id="tutorials-nav-menu" class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding-top: 20px;">
			<legend style="color: #333; font-size: 22px;">Tutorials</legend>
			<div class="list-group">
			<?php if ( $tutorials->have_posts() ) {
				while ( $tutorials->have_posts() ) : $tutorials->the_post(); ?>
					<a href="#tutorial-<?php echo $post->post_name; ?>" class="list-group-item" name="<?php echo $post->post_name; ?>">
						<h4 class="list-group-item-heading"><?php the_title(); ?></h4>
						<p class="list-group-item-text"><?php echo get_post_meta( $post->ID, 'tagline', true ); ?></p>
					</a>
					<?php endwhile;
				}
			?>
			</div>
		</nav>
		<main id="tutorials-content" class="col-xs-12 col-sm-7 col-md-7 col-lg-7" style="padding-top: 20px; margin-bottom: 20px;">
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
		<aside class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
			<?php //get_sidebar( 'tutorial' ); ?>
		</aside>
	</div>
</div>

<?php get_footer(); ?>
