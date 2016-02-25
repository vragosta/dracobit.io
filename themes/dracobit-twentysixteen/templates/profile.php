<?php

/**
 * Template Name: Profile
 *
 * @package WordPress
 */

get_header(); ?>

<div class="container" style="height: 200px; background: #fff; margin-top: 50px; padding-top: 13px; border: 1px solid #9b9b9b;">
  <div class="row">
    <div id="profile-left-column" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div id="profile-user-display" class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <div id="profile-avatar-container">
            <?php echo get_avatar( $current_user->ID, 150 ); ?>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <div id="profile-rank-display">

          </div>
        </div>
      </div>
    </div>
    <div id="profile-center-column" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    </div>
    <div id="profile-right-column" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <?php get_sidebar( 'profile' ); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
