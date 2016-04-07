<section id="tutorial-overview-container">
  <legend>Overview</legend>
  <?php
    global $post;
    $original_post_type = get_post_type();
    $original_post_id = $post->ID;

    $args = array(
      'post_type' => 'chapter',
      'tax_query' => array(
      array(
        'taxonomy' => 'tutorial',
        'field'    => 'slug',
        'terms'    => 'linux-for-beginners',
      ) ),
    );

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <p><i class="fa fa-file-text-o"></i></p>
              </div>
              <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 tutorial-anchor-container">
                <a name="<?php echo $post->post_name; ?>" data-chapter-id="<?php echo $post->ID; ?>"><?php echo $post->post_title; ?></a>
              </div>
            </div>
          </div>
        </div><?php
      endwhile;
    }
  ?>
</section>
