<?php
/**
 * TODO
 *
 * @package    WordPress
 * @subpackage Dracobit
 * @since      1.0.0
 */

// Blocking direct access to this file.
defined( 'ABSPATH' ) || exit;

class WP_JSON_Options {
	/**
	 * Register custom endpoints.
	 *
	 * @param  array $routes
	 * @return array
	 */
	public function register_routes( $routes ) {
		$routes['/login'] = array(
			array( array( $this, 'login' ), WP_JSON_Server::CREATABLE | WP_JSON_Server::ACCEPT_JSON ),
		);

		return $routes;
	}

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
			'username' => $_POST['dracobit_login_username'],
			'password' => $_POST['dracobit_login_password'],
			'nonce'    => $_POST['dracobit_login_nonce'],
			'errors'   => $errors
		);

		return $response;
	}
}
