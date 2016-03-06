<?php
	get_header();
	$tutorials = new WP_Query( array( 'post_type' => 'tutorial', 'order' => 'ASC' ) );
?>
<main class="tutorial-page-container container">
	<section id="tutorial-nav" class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<legend>Tutorials Archive</legend>
			<div class="list-group">
			<?php
				if ( $tutorials->have_posts() ) {
					while ( $tutorials->have_posts() ) : $tutorials->the_post(); ?>
						<a href="/<?php echo $post->post_name; ?>" class="list-group-item" name="<?php echo $post->post_name; ?>">
							<div class="row">
								<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
									<h4 class="list-group-item-heading"><?php the_title(); ?></h4>
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
									<p id="tutorial-version">
										<?php
											$version = get_post_meta( $post->ID, 'version', true);
											if ( $version ) {
												echo 'v' . $version;
											} else {
												echo 'v1.0';
											}
										?>
									</p>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<p class="list-group-item-text">
										<?php
											$tagline =  get_post_meta( $post->ID, 'tagline', true );
											if ( $tagline ) {
												echo $tagline;
											} else {
												echo 'Please enter tagline.';
											}
										?>
									</p>
								</div>
							</div>
						</a>
					<?php endwhile;
				}
			?>
			</div>
		</div>
	</section>
</main>
