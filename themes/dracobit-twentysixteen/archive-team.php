<?php get_header(); ?>

<div class="dracobit-container container">
	<main class="row">
		<section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<legend>Teams</legend>
			<div class="dracobit-section"><?php
				$args = array(
					'post_type' => 'team',
				);
				$teams = new WP_Query( $args );
				while ( $teams->have_posts() ) : $teams->the_post();

				( get_post_meta( $post->ID, 'tagline', true ) ) ? $tagline = get_post_meta( $post->ID, 'tagline', true ) : $tagline = ''; ?>

          <div class="list-group" style="height: 250px;">
            <div class="row list-group-item archive-item">
              <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
								<h2><a href="/team/<?php echo $post->post_name; ?>"><?php echo esc_html( $post->post_title ); ?></a></h2>

								<div class="team-archive-content">
									<p style="margin-bottom: 40px; font-size: 16px;">Created by <a href="/user/<?php the_author(); ?>" class=""><?php the_author(); ?></a></p>
									<p style="font-size: 16px;"><?php echo $tagline; ?></p>
								</div>

              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a href="<?php the_permalink(); ?>" style="">
                  <img src="<?php echo ( has_post_thumbnail() ) ? the_post_thumbnail_url( 'small' ) : ''?>" style="margin-top: 10px; width: 100%; height: 100%;"/>
                </a>
              </div>
							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="display: flex; justify-content: center;">
								<p style="margin-top: 20px;">
									<select name="">
									  <option value="">Select...</option>
									  <option value="">View Members</option>
									  <option value="">View Chapters</option>
									</select>
								</p>
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
