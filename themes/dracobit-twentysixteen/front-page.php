<?php get_header(); ?>
  <div class="row dracobit-front-page-container">
    <div class="col-xs-12 col-sm-12 col-md-12 col lg-12"><?php
      if ( ! is_user_logged_in() ) { ?>
        <div class="dracobit-signup-form-container">
          <h1><strong>Sign Up</strong></h1>
          <h4>There's a little Draco in everyone.</h4>
          <section class="form-control dracobit-signup-errors">
            <li>There were Errors with your submission:</li>
          </section>
          <section class="dracobit-signup-form">
            <fieldset>
              <div class="form-group">
                <input name="dracobit-signup-username" class="form-control" placeholder="Username" type="text" aria-describedby="login-username-icon" required />
              </div>
            </fieldset>
            <fieldset>
              <div class="form-group">
                <input name="dracobit-signup-email" class="form-control" placeholder="Email" type="email" aria-describedby="signup-email-icon" required />
              </div>
            </fieldset>
            <fieldset>
              <div class="form-group">
                <input name="dracobit-signup-firstname" class="form-control" placeholder="First name" type="text" aria-describedby="signup-name-icon" required />
              </div>
            </fieldset>
            <fieldset>
              <div class="form-group">
                <input name="dracobit-signup-lastname" class="form-control" placeholder="Last name" type="text" aria-describedby="signup-name-icon" required />
              </div>
            </fieldset>
            <fieldset>
              <div class="form-group">
                <input name="dracobit-signup-password" class="form-control" placeholder="Password" type="password" aria-describedby="signup-password-icon" required />
              </div>
            </fieldset>
            <fieldset>
              <div class="form-group">
                <input name="dracobit-signup-password-confirm" class="form-control" placeholder="Confirm password" type="password" aria-describedby="signup-password-icon" required />
              </div>
            </fieldset>
            <fieldset>
              <div class="form-group">
                <input type="hidden" name="dracobit-signup-nonce" value="<?php echo wp_create_nonce( 'dracobit-signup-nonce' ); ?>" />
                <button class="btn btn-info dracobit-signup-submit">Sign Up</button>
              </div>
            </fieldset>
          </section>
        </div><?php
      } ?>
    </div>
  </div>

<?php get_footer(); ?>
