<?php
/**
 * Wordpress Options endpoints.
 *
 * @package    WordPress
 * @subpackage Dracobit
 * @since      1.0.0
 */


// Blocking direct access to this file.
defined( 'ABSPATH' ) || exit;
require_once ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/api-code/database.php');

class WP_JSON_Options {
	/**
	 * Register custom endpoints.
	 *
	 * @since  1.0.0
	 * @param  array $routes Existing routes
	 * @return array $routes Existing routes with new additions
	 */
	public function register_routes( $routes ) {
		$routes['/login'] = array(
			array( array( $this, 'login' ), WP_JSON_Server::CREATABLE | WP_JSON_Server::ACCEPT_JSON ),
		);

		$routes['/signup'] = array(
			array( array( $this, 'signup' ), WP_JSON_Server::CREATABLE | WP_JSON_Server::ACCEPT_JSON ),
		);

		$routes['/logout'] = array(
			array( array( $this, 'logout' ), WP_JSON_Server::CREATABLE | WP_JSON_Server::ACCEPT_JSON ),
		);

		return $routes;
	}

	/**
	 * Logs the user in or returns error message(s).
	 *
	 * @since  1.0.0
	 * @param  void
	 * @return array $resonse Error messages
	 */
	public function login() {
		if ( isset( $_POST['dracobit_login_username'] ) && wp_verify_nonce( $_POST['dracobit_login_nonce'], 'dracobit-login-nonce' ) ) {
			$user = get_userdatabylogin( $_POST['dracobit_login_username'] );

			if ( ! $user ) {
				dracobit_errors()->add( 'empty_username', __( 'Invalid username' ) );
			}

			if ( ! isset( $_POST['dracobit_login_password'] ) || $_POST['dracobit_login_password'] == '' ) {
				dracobit_errors()->add( 'empty_password', __( 'Please enter a password' ) );
			}

			if ( ! wp_check_password( $_POST['dracobit_login_password'], $user->user_pass, $user->ID ) ) {
				dracobit_errors()->add( 'empty_password', __( 'Incorrect password' ) );
			}

			$errors = dracobit_errors()->get_error_messages();

			if ( empty( $errors ) ) {
				wp_setcookie( $_POST['dracobit_login_username'], $_POST['dracobit_login_password'], true );
				wp_set_current_user( $user->ID, $_POST['dracobit_login_username'] );
				do_action( 'wp_login', $_POST['dracobit_login_username'] );
			}
		}

		$response = array(
			'errors'   => $errors
		);

		return $response;
	}

	/**
	 * Creates user in wp_users table or returns error message(s).
	 *
	 * @since  1.0.0
	 * @param  void
	 * @return array $response Error messages
	 */
	public function signup() {
		if ( isset( $_POST['dracobit_signup_username'] ) && wp_verify_nonce( $_POST['dracobit_signup_nonce'], 'dracobit-signup-nonce' ) ) {
			$user_login   = $_POST['dracobit_signup_username'];
			$user_email   = $_POST['dracobit_signup_email'];
			$user_first   = $_POST['dracobit_signup_firstname'];
			$user_last    = $_POST['dracobit_signup_lastname'];
			$user_pass    = $_POST['dracobit_signup_password'];
			$pass_confirm = $_POST['dracobit_signup_password_confirm'];

			// this is required for username checks
			require_once( ABSPATH . WPINC . '/registration.php' );

			if ( username_exists( $user_login ) ) {
				dracobit_errors()->add( 'username_unavailable', __( 'Username already taken' ) );
			}

			if ( ! validate_username( $user_login ) ) {
				dracobit_errors()->add( 'username_invalid', __( 'Invalid username' ) );
			}

			if ( $user_login == '' ) {
				dracobit_errors()->add( 'username_empty', __( 'Please enter a username' ) );
			}

			if ( ! is_email( $user_email ) ) {
				dracobit_errors()->add( 'email_invalid', __( 'Invalid email' ) );
			}

			if ( email_exists( $user_email ) ) {
				dracobit_errors()->add( 'email_used', __( 'Email already registered' ) );
			}

			if ( $user_pass == '' ) {
				dracobit_errors()->add( 'password_empty', __( 'Please enter a password' ) );
			}

			if ( $user_pass != $pass_confirm ) {
				dracobit_errors()->add( 'password_mismatch', __( 'Passwords do not match' ) );
			}

			$errors = dracobit_errors()->get_error_messages();

			if ( empty( $errors ) ) {

				$new_user_id = wp_insert_user( array(
						'user_login'      => $user_login,
						'user_pass'       => $user_pass,
						'user_email'      => $user_email,
						'first_name'      => $user_first,
						'last_name'       => $user_last,
						'user_registered' => date('Y-m-d H:i:s'),
						'role'            => 'author'
					)
				);

				if ( $new_user_id ) {
					// send an email to the admin alerting them of the signup
					wp_new_user_notification( $new_user_id );

					// log the new user in
					wp_setcookie( $user_login, $user_pass, true );
					wp_set_current_user( $new_user_id, $user_login );
					do_action( 'wp_login', $user_login );
					DatabaseUtil\add_to_mobile_db($user_login);
				}
			}

			$response = array(
				'errors'           => $errors
			);

			return $response;
		}
	}

	/**
	 * Logs the user out by destroying the current session.
	 *
	 * @since  1.0.0
	 * @param  void
	 * @return array $response Error messages
	 */
	public function logout() {
		wp_logout();
	}
}
