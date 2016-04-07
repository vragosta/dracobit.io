<?php get_header(); ?>

  <div id="fp-container" class="row">
    <div class="fp-left col-xs-12 col-sm-5 col-md-6 col lg-6 ">
      <img src="http://i1187.photobucket.com/albums/z395/AAlegends/Dragonite.png" alt="Dragonite.png"/></a>
    </div>
    <div class="fp-right col-xs-12 col-sm-7 col-md-6 col lg-6">
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
              <input name="dracobit_signup_input" id="dracobit_user_login" class="form-control" placeholder="Username" type="text" aria-describedby="login-username-icon" required />
            </div>
            <div class="form-group">
              <input type="text" class="autocomplete-fix" />
              <input name="dracobit_signup_input" id="dracobit_user_email" class="form-control" placeholder="Email" type="email" aria-describedby="signup-email-icon" required />
            </div>
            <div class="input-group" id="signup-name-container">
              <input type="text" class="autocomplete-fix" />
              <input name="dracobit_signup_first" id="dracobit_user_first" class="form-control" placeholder="First name" type="text" aria-describedby="signup-name-icon" required />

              <input type="text" class="autocomplete-fix" />
              <input name="dracobit_signup_last" id="dracobit_user_last" class="form-control" placeholder="Last name" type="text" aria-describedby="signup-name-icon" required />
            </div>
            <div class="form-group">
              <input type="text" class="autocomplete-fix" />
              <input name="dracobit_signup_input" id="dracobit_user_pass" class="form-control" placeholder="Password" type="password" aria-describedby="signup-password-icon" required />
            </div>
            <div class="form-group">
              <input type="text" class="autocomplete-fix" />
              <input name="dracobit_signup_input" id="password_again" class="form-control" placeholder="Confirm password" type="password" aria-describedby="signup-password-icon" required />
            </div>
            <p>
              <input type="hidden" class="dracobit_register_nonce" value="<?php echo wp_create_nonce('dracobit-register-nonce'); ?>"/>
              <input id="dracobit_signup_submit" type="submit" value="<?php _e('Register Your Account'); ?>"/>
            </p>
          </fieldset>
        </form>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
