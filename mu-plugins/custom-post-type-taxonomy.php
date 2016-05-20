<?php
/*
Plugin Name: Custom Post Type/Taxonomy
Description: Enables custom post types and taxonomies
Version: 1.0.0
Author: Dracobit
Author URI: http://www.dracobit.io *
*/

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
}
add_action( 'init', 'dracobit_register_taxonomies' );
