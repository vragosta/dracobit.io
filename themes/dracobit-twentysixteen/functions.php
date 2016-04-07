<?php
/**
 * Dracobit functions and definitions
 *
 * Set up the theme and provide some helper functions, which are used in the
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
include_once get_template_directory() . '/inc/chapter-metabox.php';
include_once get_template_directory() . '/inc/class-wp-json-tutorial.php';
include_once get_template_directory() . '/inc/class-wp-json-chapter.php';

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
	wp_enqueue_script( 'dracobit', get_template_directory_uri() . '/js/dracobit.min.js', array( 'jquery', 'backbone', 'underscore', 'vendors' ), DRACOBIT_VERSION, true );

	wp_localize_script( 'dracobit', 'Dracobit', array(
		'currentPost' => $post->ID,
		'options'     => array(
			'search'  => home_url( '/?s=' ),
			'apiUrl'  => json_url(),
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
 * Establishes the endpoints for each of the post types,
 * to be used by the backbone framework
 *
 * @since 1.0.0
 */
function dracobit_endpoints_init() {
	$tutorial_endpoint = new WP_JSON_Tutorial();
	$chapter_endpoint = new WP_JSON_Chapter();

	add_filter( 'json_endpoints', array( $tutorial_endpoint, 'register_routes' ) );
	add_filter( 'json_prepare_post', array( $tutorial_endpoint, 'data' ), 10, 3 );

	add_filter( 'json_endpoints', array( $chapter_endpoint, 'register_routes' ) );
	add_filter( 'json_prepare_post', array( $chapter_endpoint, 'data' ), 10, 3 );
}
add_action( 'wp_json_server_before_serve', 'dracobit_endpoints_init' );

/**
 * Registers the various sidebars
 *
 * @since 1.0.0
 */
function dracobit_widgets_init() {
	$sidebars = array( 'post', 'page', 'tutorial' );
	foreach ( $sidebars as $post_type ) {
		register_sidebar( array(
			'name'          => sprintf( __( 'Sidebar for post type: %s', 'dracobit' ), $post_type ),
			'id'            => $post_type . '-sidebar',
			'description'   => sprintf( __( 'Sidebar for post type: %s', 'dracobit' ), $post_type ),
			'before_widget' => '<div class="list-group"><a id="%1$s" class="widget widget-' . $post_type . ' %2$s list-group-item">',
			'after_widget'  => '</a></div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
}
add_action( 'widgets_init', 'dracobit_widgets_init' );

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
if ( ! function_exists( 'dracobit_errors' ) ) {
	function dracobit_errors() {
	  static $wp_error;
	  return isset( $wp_error ) ? $wp_error : ( $wp_error = new WP_Error( null, null, null ) );
	}
}

/**
 * Registers custom post types
 *
 * @since 1.0.0
 */
function dracobit_register_posttypes() {
	register_post_type( 'tutorial', array(
			'label' => 'Tutorials',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'rewrite' => array( 'slug' => 'tutorial', 'with_front' => false ),
			'query_var' => true,
			'has_archive' => true,
			'menu_position' => 41,
			'menu_icon' => 'dashicons-edit',
			'supports' => array( 'title','editor', 'comments', 'excerpt','custom-fields','revisions','thumbnail','author' ),
			'labels' => array(
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

	register_post_type( 'chapter', array(
			'label' => 'Chapter',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'rewrite' => array( 'slug' => 'chapter', 'with_front' => false ),
			'query_var' => true,
			'has_archive' => true,
			'menu_position' => 41,
			'menu_icon' => 'dashicons-edit',
			'supports' => array( 'title','editor', 'comments', 'excerpt','custom-fields','revisions','thumbnail','author' ),
			'labels' => array(
					'name' => 'Chapters',
					'singular_name' => 'Chapter',
					'menu_name' => 'Chapters',
					'add_new' => 'Add Chapter',
					'add_new_item' => 'Add New Chapter',
					'edit' => 'Edit',
					'edit_item' => 'Edit Chapter',
					'new_item' => 'New Chapter',
					'view' => 'View Chapter',
					'view_item' => 'View Chapter',
					'search_items' => 'Search Chapters',
					'not_found' => 'No Chapters Found',
					'not_found_in_trash' => 'No Chapters Found in Trash',
					'parent' => 'Parent Chapter',
			)
		)
	);
}
add_action( 'init', 'dracobit_register_posttypes' );

/**
 * Registers custom taxonomies
 *
 * @since 1.0.0
 */
function dracobit_register_taxonomies() {
	register_taxonomy( 'language', array (
	  0 => 'chapter'
	),
	array( 'hierarchical' => true,
		'label' => 'Languages',
		'show_ui' => true,
		'query_var' => true,
		'show_admin_column' => false,
		'rewrite' => array('slug' => 'language', 'with_front' => false ),
		'labels' => array (
			  'search_items' => 'Language',
			  'popular_items' => '',
			  'all_items' => 'All',
			  'parent_item' => '',
			  'parent_item_colon' => '',
			  'edit_item' => '',
			  'update_item' => '',
			  'add_new_item' => 'Add New Langauge',
			  'new_item_name' => '',
			  'separate_items_with_commas' => '',
			  'add_or_remove_items' => '',
			  'choose_from_most_used' => '',
		)
	) );

	register_taxonomy( 'tutorial', array (
		0 => 'chapter'
	),
	array( 'hierarchical' => true,
		'label' => 'Tutorial',
		'show_ui' => true,
		'query_var' => true,
		'show_admin_column' => false,
		'rewrite' => array('slug' => 'tutorial', 'with_front' => false ),
		'labels' => array (
				'search_items' => 'Tutorial',
				'popular_items' => '',
				'all_items' => 'All',
				'parent_item' => '',
				'parent_item_colon' => '',
				'edit_item' => '',
				'update_item' => '',
				'add_new_item' => 'Add New Tutorial',
				'new_item_name' => '',
				'separate_items_with_commas' => '',
				'add_or_remove_items' => '',
				'choose_from_most_used' => '',
		)
	) );
}
add_action( 'init', 'dracobit_register_taxonomies' );

/**
 * Custom comment template
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'dracobit_comment_template' ) ) {
	function dracobit_comment_template( $comment, $args, $depth ) {
	  if ( 'div' === $args['style'] ) {
	      $tag       = 'div';
	      $add_below = 'comment';
	  } else {
	      $tag       = 'li';
	      $add_below = 'div-comment';
	  }
	  ?>

	  <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	  <?php if ( 'div' != $args['style'] ) : ?>
	    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	  <?php endif; ?>
	  <div class="comment-author vcard">
	    <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
	    <?php printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() ); ?>
	  </div>
	  <?php if ( $comment->comment_approved == '0' ) : ?>
	    <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
	    <br />
	  <?php endif; ?>

	  <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
	    <?php
	    	printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
	    ?>
	  </div>

	  <?php comment_text(); ?>

	  <div class="reply">
	    <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
	  </div>
	  <?php if ( 'div' != $args['style'] ) : ?>
	  </div>
	  <?php endif; ?>
	  <?php
	}
}

?>
