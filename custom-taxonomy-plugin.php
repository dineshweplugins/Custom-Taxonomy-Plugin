<?php
/*
Plugin Name: Custom Taxonomy Plugin
Description: A plugin to create a custom taxonomy.
Version: 1.0
Author: Dinesh Suthar
License: GPLv2 or later
*/

function create_custom_taxonomy() {
    $labels = array(
        'name'              => _x( 'Books', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Book', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Books', 'textdomain' ),
        'all_items'         => __( 'All Books', 'textdomain' ),
        'parent_item'       => __( 'Parent Book', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Book:', 'textdomain' ),
        'edit_item'         => __( 'Edit Book', 'textdomain' ),
        'update_item'       => __( 'Update Book', 'textdomain' ),
        'add_new_item'      => __( 'Add New Book', 'textdomain' ),
        'new_item_name'     => __( 'New Book Name', 'textdomain' ),
        'menu_name'         => __( 'Book', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => true, 
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'Book' ),
    );

    register_taxonomy( 'Book', array( 'post' ), $args );
}
add_action( 'init', 'create_custom_taxonomy', 0 );
