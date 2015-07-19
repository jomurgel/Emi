<?php
/**
 * Custom Post Types + Taxonomies + Walkers
 *
 * @package themeHandle
 */

/* CUSTOM POST TYPES
 ========================== */
/*
register_post_type( 'custom-post-type',
	array(
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5, // '5' places menu item directly below Posts
      'menu_icon' => 'dashicons-admin-home', // https://developer.wordpress.org/resource/dashicons/
      'taxonomies' => array('custom-tax'), // associates with custom taxonomy
      'labels' => array(
        'name' => __( 'Single custom-post-types' ),
        'singular_name' => __( 'custom-post-type' ),
        'add_new' => __( 'Add New' ),
        'add_new_item' => __( 'Add New custom-post-type' ),
        'edit' => __( 'Edit' ),
        'edit_item' => __( 'Edit custom-post-type' ),
        'new_item' => __( 'New custom-post-type' ),
        'view' => __( 'View custom-post-type' ),
        'view_item' => __( 'View custom-post-type' ),
        'search_items' => __( 'Search custom-post-types' ),
        'not_found' => __( 'No custom-post-types found' ),
        'not_found_in_trash' => __( 'No custom-post-types found in Trash' ),
        'parent' => __( 'Parent custom-post-type' ),
        ),
    )
);
*/


/* TAXONOMIES
 ========================== */
/*
function create_nonhierarchical_taxonomy() {
// Labels part for the GUI
  $labels = array(
    'name' => _x( 'custom-tax', 'taxonomy general name' ),
    'singular_name' => _x( 'custom-tax', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search custom-tax' ),
    'popular_items' => __( 'Popular custom-tax' ),
    'all_items' => __( 'All custom-tax' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit custom-tax' ), 
    'update_item' => __( 'Update custom-tax' ),
    'add_new_item' => __( 'Add New custom-tax' ),
    'new_item_name' => __( 'New custom-tax Name' ),
    'separate_items_with_commas' => __( 'Separate with Commas' ), // note for typeing taxonomies
    'add_or_remove_items' => __( 'Add or remove custom-tax' ),
    'choose_from_most_used' => __( 'Recent custom-tax' ),
    'menu_name' => __( 'custom-tax' ),
  ); 

// Now register the non-hierarchical taxonomy like tag
  register_taxonomy('custom-tax','camp', 
  array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true
  ));
} 
*/


/* WALKERS
 ========================== */

?>