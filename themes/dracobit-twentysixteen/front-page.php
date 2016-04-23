<?php get_header(); ?>

  <div id="fp-container" class="row">
    <div class="fp-right col-xs-12 col-sm-12 col-md-12 col lg-12">

    <?php if ( ! is_user_logged_in() ) { ?>
      <div class="signup-form-container">
        <h1 class="dracobit-signup-header"><strong><?php _e( 'Sign Up' ); ?></strong></h1>
        <h4 class="dracobit-signup-subheader">There's a little Draco in everyone.</h4>

        <?php
          if ( $codes = dracobit_errors()->get_error_codes() ) {
        		echo '<div class="dracobit_errors">';
        		foreach( $codes as $code ) {
        			$message = dracobit_errors()->get_error_message( $code );
        			echo '<span class="error"><strong>' . __( 'Error' ) . '</strong>: ' . $message . '</span><br/>';
        		}
        		echo '</div>';
        	}
        ?>

        <form id="dracobit-signup-form" class="dracobit-signup-form" action="" method="POST">
          <fieldset>
            <div class="form-group">
              <input type="text" class="autocomplete-fix" />
              <input name="dracobit-signup-username" id="dracobit-signup-username" class="form-control" placeholder="Username" type="text" aria-describedby="login-username-icon" required />
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <input type="text" class="autocomplete-fix" />
              <input name="dracobit-signup-email" id="dracobit-signup-email" class="form-control" placeholder="Email" type="email" aria-describedby="signup-email-icon" required />
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <input type="text" class="autocomplete-fix" />
              <input name="dracobit-signup-firstname" id="dracobit-signup-firstname" class="form-control" placeholder="First name" type="text" aria-describedby="signup-name-icon" required />
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <input type="text" class="autocomplete-fix" />
              <input name="dracobit-signup-lastname" id="dracobit-signup-lastname" class="form-control" placeholder="Last name" type="text" aria-describedby="signup-name-icon" required />
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <input type="text" class="autocomplete-fix" />
              <input name="dracobit-signup-password" id="dracobit-signup-password" class="form-control" placeholder="Password" type="password" aria-describedby="signup-password-icon" required />
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <input type="text" class="autocomplete-fix" />
              <input name="dracobit-signup-password-confirm" id="dracobit-signup-password-confirm" class="form-control" placeholder="Confirm password" type="password" aria-describedby="signup-password-icon" required />
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <input type="hidden" name="dracobit-signup-nonce" value="<?php echo wp_create_nonce('dracobit-signup-nonce'); ?>"/>
              <input id="dracobit-signup-submit" class="btn btn-info" type="submit" value="<?php _e('Sign Up'); ?>"/>
            </div>
          </fieldset>
        </form>
      </div>
      <?php } ?>
    </div>
  </div>

<?php get_footer(); ?>
