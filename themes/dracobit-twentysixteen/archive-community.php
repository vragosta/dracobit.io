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
              <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
								<h2><a href="/community/<?php echo $post->post_name; ?>"><?php echo esc_html( $post->post_title ); ?></a></h2>

								<div class="community-archive-content">
									<p>Owner: <a href="/user/<?php the_author(); ?>" class="chapter-author"><?php the_author(); ?></a></p>
									<p><?php echo the_content(); ?></p>
								</div>

              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a href="<?php the_permalink(); ?>" style="">
                  <img src="<?php echo ( has_post_thumbnail() ) ? the_post_thumbnail_url( 'small' ) : ''?>" style="margin-top: 10px; width: 100%; height: 100%;"/>
                </a>
              </div>
							<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
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
