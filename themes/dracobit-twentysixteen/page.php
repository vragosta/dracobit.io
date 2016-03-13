<?php get_header(); ?>

<div class="dracobit-container container">
	<main class="row">
    <section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<legend>Profile</legend>
      <!-- <div id="profile-user-display" class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <div id="profile-avatar-container">
            <?php echo get_avatar( $current_user->ID, 150 ); ?>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <div id="profile-rank-display">

          </div>
        </div>
      </div> -->
    </section>
    <?php get_sidebar( get_post_type() ); ?>
  </main>
</div>

<?php get_footer(); ?>
