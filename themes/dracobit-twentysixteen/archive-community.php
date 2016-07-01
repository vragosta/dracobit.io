<?php get_header(); ?>

<div class="dracobit-container container">
	<main class="row">
		<section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<legend>Communities</legend>
			<div class="dracobit-section"><?php
				$args = array(
					'post_type' => 'community',
				);
				$communities = new WP_Query( $args );
				while ( $communities->have_posts() ) : $communities->the_post(); ?>

          <div class="list-group" style="height: 250px;">
            <div class="row list-group-item archive-item">
              <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a href="<?php the_permalink(); ?>" style="">
                  <img src="<?php echo ( has_post_thumbnail() ) ? the_post_thumbnail_url( 'small' ) : ''?>" style="width: 100%; height: 100%;"/>
                </a>
              </div>
            </div>
          </div>

        <?php
				endwhile;
				wp_reset_postdata(); ?>
			</div>
		</section>
		<?php get_sidebar( get_post_type() ); ?>
	</main>
</div>

<?php get_footer(); ?>
