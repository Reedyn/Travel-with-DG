<?php

add_theme_support( 'post-thumbnails' );



// Register custom post type for photo gallery
function photo_post_type() {

	$labels = array(
		'name'                => _x( 'Photos', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Photo', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Photos', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Photo:', 'text_domain' ),
		'all_items'           => __( 'All Photos', 'text_domain' ),
		'view_item'           => __( 'View Photo', 'text_domain' ),
		'add_new_item'        => __( 'Add New Photo', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Photo', 'text_domain' ),
		'update_item'         => __( 'Update Photo', 'text_domain' ),
		'search_items'        => __( 'Search Photo', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'photo', 'text_domain' ),
		'description'         => __( 'Used for photo gallery', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'category' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'photo', $args );

}
add_action( 'init', 'photo_post_type', 0 );


// Add camera icon to "photos" post type
function add_menu_icons_styles(){

	echo'
	<style>
	#adminmenu .menu-icon-photo div.wp-menu-image:before {
		content: "\f306";
	}
	</style>';

}
add_action( 'admin_head', 'add_menu_icons_styles' );


// Add thumbnail for posts to admin list
add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
function posts_columns($defaults){
    $defaults['riv_post_thumbs'] = __('Thumbnail');
    return $defaults;
}
function posts_custom_columns($column_name, $id){
	if($column_name === 'riv_post_thumbs'){
        echo the_post_thumbnail( array(100, 100) );
    }
}


?>