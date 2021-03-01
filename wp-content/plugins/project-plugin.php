<?php
  /*
  Plugin Name: GRC Theme CPT & taxonomy
  Description: GRC Theme Custom Post Types
  Version: 1.0
  Author: Shanti Chary
  License: GPL 2.1
  */

  function grc_register_custom_post_types() {
    //Project Custom Post type
    $labels = array(
        'name'               => _x( 'Projects', 'post type general name' ),
        'singular_name'      => _x( 'Project', 'post type singular name'),
        'menu_name'          => _x( 'Projects', 'admin menu' ),
        'name_admin_bar'     => _x( 'Project', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'Project' ),
        'add_new_item'       => __( 'Add New Project' ),
        'new_item'           => __( 'New Project' ),
        'edit_item'          => __( 'Edit Project' ),
        'view_item'          => __( 'View Project' ),
        'all_items'          => __( 'All Projects' ),
        'search_items'       => __( 'Search Projects' ),
        'parent_item_colon'  => __( 'Parent Projects:' ),
        'not_found'          => __( 'No Projects found.' ),
        'not_found_in_trash' => __( 'No Projects found in Trash.' ),
        'archives'           => __( 'Project Archives'),
        'insert_into_item'   => __( 'Uploaded to this Project'),
        'uploaded_to_this_item' => __( 'Project Archives'),
        'filter_item_list'   => __( 'Filter Projects list'),
        'items_list_navigation' => __( 'Projects list navigation'),
        'items_list'         => __( 'Projects list'),
        'featured_image'     => __( 'Project feature image'),
        'set_featured_image' => __( 'Set Project feature image'),
        'remove_featured_image' => __( 'Remove Project feature image'),
        'use_featured_image' => __( 'Use as feature image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projects' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon'          => 'dashicons-media-audio',
    );
    register_post_type( 'project', $args );
}

 add_action( 'init', 'grc_register_custom_post_types' );

 function grc_rewrite_flush() {
    grc_register_custom_post_types();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'grc_rewrite_flush' );
