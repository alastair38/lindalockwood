<?php
/* joints Paintings Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

*/


// let's create the function for the custom type
function paintings() { 
	// creating (registering) the custom type 
	register_post_type( 'paintings', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Paintings', 'jointstheme'), /* This is the Title of the Group */
			'singular_name' => __('Painting', 'jointstheme'), /* This is the individual type */
			'all_items' => __('All Paintings', 'jointstheme'), /* the all items menu item */
			'add_new' => __('Add New', 'jointstheme'), /* The add new menu item */
			'add_new_item' => __('Add New Painting', 'jointstheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointstheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Paintings', 'jointstheme'), /* Edit Display Title */
			'new_item' => __('New Painting', 'jointstheme'), /* New Display Title */
			'view_item' => __('View Painting', 'jointstheme'), /* View Display Title */
			'search_items' => __('Search Paintings', 'jointstheme'), /* Search Paintings Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'jointstheme'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'jointstheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the paintings custom post type', 'jointstheme' ), /* Paintings Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'paintings', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'paintings', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'thumbnail', 'excerpt', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type('category', 'paintings');
    register_taxonomy_for_object_type('category', 'attachment');
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type('post_tag', 'paintings');
	
} 


	// adding the function to the Wordpress init
	add_action( 'init', 'paintings');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	
?>