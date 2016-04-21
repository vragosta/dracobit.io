<?php get_header(); ?>

  <div id="fp-container" class="row">
    <div class="fp-right col-xs-12 col-sm-12 col-md-12 col lg-12">

    <?php if ( ! is_user_logged_in() ) { ?>
      <div class="signup-form-container">
        <h1 class="dracobit_signup_header"><strong><?php _e( 'Sign Up' ); ?></strong></h1>
        <h4 class="dracobit_signup_subheader">There's a little Draco in everyone.</h4>

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

        <form id="dracobit_signup_form" class="dracobit_form" action="" method="POST">
          <fieldset>
            <div class="form-group">
              <input type="text" class="autocomplete-fix" />
              <input name="dracobit_signup_username" id="dracobit_signup_username" class="form-control" placeholder="Username" type="text" aria-describedby="login-username-icon" required />
            </div>
            <div class="form-group">
              <input type="text" class="autocomplete-fix" />
              <input name="dracobit_signup_email" id="dracobit_signup_email" class="form-control" placeholder="Email" type="email" aria-describedby="signup-email-icon" required />
            </div>
            <div class="input-group" id="signup-name-container">
              <input type="text" class="autocomplete-fix" />
              <input name="dracobit_signup_firstname" id="dracobit_signup_firstname" class="form-control" placeholder="First name" type="text" aria-describedby="signup-name-icon" required />

              <input type="text" class="autocomplete-fix" />
              <input name="dracobit_signup_lastname" id="dracobit_signup_lastname" class="form-control" placeholder="Last name" type="text" aria-describedby="signup-name-icon" required />
            </div>
            <div class="form-group">
              <input type="text" class="autocomplete-fix" />
              <input name="dracobit_signup_password" id="dracobit_signup_password" class="form-control" placeholder="Password" type="password" aria-describedby="signup-password-icon" required />
            </div>
            <div class="form-group">
              <input type="text" class="autocomplete-fix" />
              <input name="dracobit_signup_password_confirm" id="dracobit_signup_password_confirm" class="form-control" placeholder="Confirm password" type="password" aria-describedby="signup-password-icon" required />
            </div>
            <p>
              <input type="hidden" name="dracobit_register_nonce" value="<?php echo wp_create_nonce('dracobit-register-nonce'); ?>"/>
              <input id="dracobit_signup_submit" type="submit" value="<?php _e('Register Your Account'); ?>"/>
            </p>
          </fieldset>
        </form>
      </div>
      <?php } ?>
    </div>
  </div>

<?php get_footer(); ?>
