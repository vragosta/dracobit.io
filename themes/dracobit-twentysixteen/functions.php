<?php
/**
 * Dracobit functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package    WordPress
 * @subpackage Dracobit
 * @since      1.0.0
 */

define( 'DRACOBIT_VERSION', '1.0.0' );
define( 'DRACOBIT_WEBSITE_URL', home_url() );

if ( function_exists( 'json_url' ) ) {
	define( 'DRACOBIT_API_URL', json_url() );
}

include_once get_template_directory() . '/inc/tutorial-metabox.php';
include_once get_template_directory() . '/inc/class-dracobit-overview-widget.php';

/* Disable WordPress Admin Bar for all users but admins. */
show_admin_bar( false );

if ( ! function_exists( 'dracobit_setup' ) ) {
	/**
	 * Dracobit setup.
	 *
	 * Set up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support post thumbnails.
	 *
	 * @since 1.0.0
	 */
	function dracobit_setup() {
		/**
		 * Make Dracobit available for translation.
		 *
		 * Translations can be added to the /languages/ directory.
		 * If you're building a theme based on Dracobit, use a find and
		 * replace to change 'sc' to the name of your theme in all
		 * template files.
		 */
		load_theme_textdomain( 'dracobit', get_template_directory() . '/languages' );

		// Add RSS feed links to <head> for posts and comments.
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// Removes the auto generator of the paragraph tags when using the wordpress function 'the_content()'
		remove_filter( 'the_content', 'wpautop' );

		// Enable support for Post Thumbnails, and declare two sizes.
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 672, 372, true );
	}
}
add_action( 'after_setup_theme', 'dracobit_setup' );

/**
 * Allows for wordpress to recognize all the javascript files
 *
 * @since 1.0.0
 */
function dracobit_scripts() {

	global $post;

	wp_enqueue_script( 'vendors', get_template_directory_uri() . '/js/vendors.min.js', array( 'jquery' ), DRACOBIT_VERSION, true );
	wp_enqueue_script( 'dracobit', get_template_directory_uri() . '/js/dracobit.min.js', array( 'jquery', 'vendors' ), DRACOBIT_VERSION, true );

	wp_localize_script( 'dracobit', 'Dracobit', array(
		'currentPost' => $post->ID,
		'options'     => array(
			'search'  => home_url( '/?s=' ),
			// 'apiUrl'  => json_url(),
			'nonce'   => wp_create_nonce( 'wp_json' ),
			'homeUrl' => home_url(),
		),
	) );
}
add_action( 'wp_enqueue_scripts', 'dracobit_scripts' );

/**
 * Allows for wordpress to recognize all of the stylesheet files
 *
 * @since 1.0.0
 */
function dracobit_styles() {

	wp_enqueue_style( 'vendors', get_template_directory_uri() . '/css/vendors.min.css', array(), DRACOBIT_VERSION, 'all' );
	wp_enqueue_style( 'dracobit', get_template_directory_uri() . '/style.min.css', array( 'vendors' ), DRACOBIT_VERSION, 'all' );
}
add_action( 'wp_enqueue_scripts', 'dracobit_styles' );

/**
 * Registers the various sidebars
 *
 * @since 1.0.0
 */
function dracobit_widgets_init() {
	register_widget( 'Dracobit_Overview_Widget' );

	register_sidebar( array(
		'name'          => __( 'Tutorial Sidebar', 'dracobit' ),
		'id'            => 'tutorial-sidebar',
		'description'   => __( 'Tutorial sidebar', 'dracobit' ),
		'before_widget' => '<li id="%1$s" class="widget widget-tutorial %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'dracobit_widgets_init' );

/**
 * User signup form
 *
 * @since 1.0.0
 */
function dracobit_signup_form() {
	if( ! is_user_logged_in() ) {
		$signup_enabled = get_option( 'users_can_register' );

		if ( $signup_enabled ) {
			$output = dracobit_signup_form_fields();
		} else {
			$output = 'User signup is not enabled';
		}
		return $output;
	}
}
add_shortcode( 'register_form', 'dracobit_signup_form' );

/**
 * User login form
 *
 * @since 1.0.0
 */
function dracobit_login_form() {

	if( !is_user_logged_in() ) {
		$output = dracobit_login_form_fields();
	} else {
		// could show some logged in user info here
		$output = 'user info here';
	}
	return $output;
}
add_shortcode( 'login_form', 'dracobit_login_form' );

/**
 * User signup form fields
 *
 * @since 1.0.0
 */
function dracobit_signup_form_fields() {

	ob_start(); ?>
		<h3 class="dracobit_header"><?php _e( 'Register New Account' ); ?></h3>
		<?php dracobit_show_error_messages(); ?>
		<form id="dracobit_signup_form" class="dracobit_form" action="" method="POST">
			<fieldset>
				<div class="input-group">
					<span class="input-group-addon" id="signup-username-icon"><i class="fa fa-user"></i></span>
					<input type="text" name="signup-autocomplete-fix" style="display: none" />
					<input name="dracobit_user_login" id="dracobit_user_login" class="form-control" placeholder="Username" type="text" aria-describedby="login-username-icon" required />
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="signup-email-icon"><i id="signup-email-icon" class="fa fa-envelope-o"></i></span>
					<input type="text" name="signup-autocomplete-fix" style="display: none" />
					<input name="dracobit_user_email" id="dracobit_user_email" class="form-control" placeholder="Email" type="email" aria-describedby="signup-email-icon" required />
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="signup-name-icon"><i class="fa fa-server"></i></span>
					<input type="text" name="signup-autocomplete-fix" style="display: none" />
					<input name="dracobit_user_first" id="dracobit_user_first" class="form-control" placeholder="First name" type="text" aria-describedby="signup-name-icon" required />
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="signup-name-icon"><i class="fa fa-server"></i></span>
					<input type="text" name="signup-autocomplete-fix" style="display: none" />
					<input name="dracobit_user_last" id="dracobit_user_last" class="form-control" placeholder="Last name" type="text" aria-describedby="signup-name-icon" required />
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="signup-password-icon"><i class="fa fa-lock signup-password-icon"></i></span>
					<input type="text" name="signup-autocomplete-fix" style="display: none" />
					<input name="dracobit_user_pass" id="dracobit_user_pass" class="form-control" placeholder="Password" type="password" aria-describedby="signup-password-icon" required />
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="signup-password-icon"><i class="fa fa-lock signup-password-icon"></i></span>
					<input type="text" name="login-autocomplete-fix" style="display: none" />
					<input name="dracobit_user_pass_confirm" id="password_again" class="form-control" placeholder="Confirm password" type="password" aria-describedby="signup-password-icon" required />
				</div>
				<p>
					<input type="hidden" name="dracobit_register_nonce" value="<?php echo wp_create_nonce('dracobit-register-nonce'); ?>"/>
					<input id="dracobit_signup_submit" type="submit" value="<?php _e('Register Your Account'); ?>"/>
				</p>
			</fieldset>
		</form>
	<?php
	return ob_get_clean();
}

/**
 * User login form fields
 *
 * @since 1.0.0
 */
function dracobit_login_form_fields() {

	ob_start(); ?>
		<h3 class="dracobit_header"><?php _e( 'Login' ); ?></h3>
		<?php dracobit_show_error_messages(); ?>
		<form id="dracobit_login_form" class="dracobit_form" action="" method="post">
			<fieldset>
				<div class="input-group">
					<span class="input-group-addon" id="login-username-icon"><i class="fa fa-user"></i></span>
					<input type="text" name="login-autocomplete-fix" style="display: none" />
					<input name="dracobit_user_login" id="dracobit_user_login" class="form-control" placeholder="Username" type="text" aria-describedby="login-username-icon" required />
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="login-password-icon"><i class="fa fa-lock"></i></span>
					<input type="text" name="login-autocomplete-fix" style="display: none" />
					<input name="dracobit_user_pass" id="dracobit_user_pass" class="form-control" placeholder="Password" type="password" aria-describedby="login-password-icon" required />
				</div>
				<div class="input-group">
					<input type="hidden" name="dracobit_login_nonce" value="<?php echo wp_create_nonce('dracobit-login-nonce'); ?>"/>
					<input id="dracobit_login_submit" class="btn btn-default" type="submit" value="Login"/>
				</div>
			</fieldset>
		</form>
	<?php
	return ob_get_clean();
}

/**
 * Logs user in after submitting a form
 *
 * @since 1.0.0
 */
function dracobit_login_member() {
	if ( isset( $_POST['dracobit_user_login'] ) && wp_verify_nonce( $_POST['dracobit_login_nonce'], 'dracobit-login-nonce' ) ) {
		$user = get_userdatabylogin( $_POST['dracobit_user_login'] );

		if ( ! $user ) {
			dracobit_errors()->add( 'empty_username', __( 'Invalid username' ) );
		}

		if ( ! isset( $_POST['dracobit_user_pass'] ) || $_POST['dracobit_user_pass'] == '' ) {
			dracobit_errors()->add( 'empty_password', __( 'Please enter a password' ) );
		}

		if ( ! wp_check_password( $_POST['dracobit_user_pass'], $user->user_pass, $user->ID ) ) {
			dracobit_errors()->add( 'empty_password', __( 'Incorrect password' ) );
		}

		$errors = dracobit_errors()->get_error_messages();

		if ( empty( $errors ) ) {

			wp_setcookie( $_POST['dracobit_user_login'], $_POST['dracobit_user_pass'], true );
			wp_set_current_user( $user->ID, $_POST['dracobit_user_login'] );
			do_action( 'wp_login', $_POST['dracobit_user_login'] );

			wp_redirect( home_url( 'profile' ) ); exit;
		}
	}
}
add_action( 'init', 'dracobit_login_member' );

/**
 * Register a new user
 *
 * @since 1.0.0
 */
function dracobit_add_new_member() {
  if ( isset( $_POST['dracobit_user_login'] ) && wp_verify_nonce( $_POST['dracobit_register_nonce'], 'dracobit-register-nonce' ) ) {
		$user_login   = $_POST['dracobit_user_login'];
		$user_email   = $_POST['dracobit_user_email'];
		$user_first   = $_POST['dracobit_user_first'];
		$user_last    = $_POST['dracobit_user_last'];
		$user_pass    = $_POST['dracobit_user_pass'];
		$pass_confirm = $_POST['dracobit_user_pass_confirm'];

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

		if( $user_pass == '' ) {
			dracobit_errors()->add( 'password_empty', __( 'Please enter a password' ) );
		}

		if ( $user_pass != $pass_confirm ) {
			dracobit_errors()->add( 'password_mismatch', __( 'Passwords do not match' ) );
		}

		$errors = dracobit_errors()->get_error_messages();

		if( empty( $errors ) ) {

			$new_user_id = wp_insert_user( array(
					'user_login'      => $user_login,
					'user_pass'       => $user_pass,
					'user_email'      => $user_email,
					'first_name'      => $user_first,
					'last_name'       => $user_last,
					'user_registered' => date('Y-m-d H:i:s'),
					'role'            => 'subscriber'
				)
			);

			if ( $new_user_id ) {
				// send an email to the admin alerting them of the signup
				wp_new_user_notification( $new_user_id );

				// log the new user in
				wp_setcookie( $user_login, $user_pass, true );
				wp_set_current_user( $new_user_id, $user_login );
				do_action( 'wp_login', $user_login );

				// send the newly created user to the home page after logging them in
				wp_redirect( home_url() ); exit;
			}
		}
	}
}
add_action( 'init', 'dracobit_add_new_member' );

/**
 * Used for tracking error messages
 *
 * @since 1.0.0
 */
function dracobit_errors() {
  static $wp_error;
  return isset( $wp_error ) ? $wp_error : ( $wp_error = new WP_Error( null, null, null ) );
}

/**
 * Displays error messages from form submissions
 *
 * @since 1.0.0
 */
function dracobit_show_error_messages() {
	if ( $codes = dracobit_errors()->get_error_codes() ) {
		echo '<div class="dracobit_errors">';
		foreach( $codes as $code ) {
			$message = dracobit_errors()->get_error_message( $code );
			echo '<span class="error"><strong>' . __( 'Error' ) . '</strong>: ' . $message . '</span><br/>';
		}
		echo '</div>';
	}
}

/**
 * TODO
 */
function dracobit_register_posttype_tutorial() {
	register_post_type( 'tutorial', array(
			'label' => 'Tutorials',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'rewrite' => array('slug' => 'tutorial', 'with_front' => false),
			'query_var' => true,
			'has_archive' => true,
			'menu_position' => 41,
			'menu_icon' => 'dashicons-edit',
			'supports' => array('title','editor','excerpt','custom-fields','revisions','thumbnail','author'),
			'labels' => array (
					'name' => 'Tutorials',
					'singular_name' => 'Tutorial',
					'menu_name' => 'Tutorials',
					'add_new' => 'Add Tutorial',
					'add_new_item' => 'Add New Tutorial',
					'edit' => 'Edit',
					'edit_item' => 'Edit Tutorial',
					'new_item' => 'New Tutorial',
					'view' => 'View Tutorial',
					'view_item' => 'View Tutorial',
					'search_items' => 'Search Tutorials',
					'not_found' => 'No Tutorials Found',
					'not_found_in_trash' => 'No Tutorials Found in Trash',
					'parent' => 'Parent Tutorial',
			)
		)
	);
}
add_action( 'init', 'dracobit_register_posttype_tutorial' );

/*
 * TODO
 */
function dracobit_register_tutorial_content() {
	global $post;
	$tutorials = new WP_Query( array( 'post_type' => 'tutorial', 'order' => 'ASC' ) );

	if ( $tutorials->have_posts() ) {
		while ( $tutorials->have_posts() ) : $tutorials->the_post();
			$post_tagline  = get_post_meta( $post->ID, 'tagline', true );
			$post_version  = get_post_meta( $post->ID, 'version', true );

			ob_start();
			include_once get_template_directory() . '/content/tutorials/' . $post->post_name . '/main.php';
			$post_content = ob_get_clean();

			ob_start();
			include_once get_template_directory() . '/content/tutorials/' . $post->post_name . '/overview.php';
			$post_overview = ob_get_clean();

			wp_update_post( array(
				'ID'           => $post->ID,
				'post_content' => $post_content,
			) );

			update_post_meta( $post->ID, 'tagline', $post_tagline );
			update_post_meta( $post->ID, 'version', $post_version );

			if ( $post_overview ) {
				update_post_meta( $post->ID, 'overview', $post_overview );
			}

		endwhile;
	}
}
add_action( 'init', 'dracobit_register_tutorial_content' );

?>
