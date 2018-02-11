<?php

   
// Remove elements from the wp_head
remove_action( 'wp_head', 'wlwmanifest_link' );	// Remove the link to the Windows Live Writer manifest file
remove_action( 'wp_head', 'wp_generator' );		// Remove the WordPress version number e.g. - WordPress 3.1

// Remove the admin bar using add_filter
add_filter( 'show_admin_bar', '__return_false' );

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function wpse_wpautop_nobr( $content ) {
    return wpautop( $content, false );
}

add_filter( 'the_content', 'wpse_wpautop_nobr' );
add_filter( 'the_excerpt', 'wpse_wpautop_nobr' );

// add_theme_support( 'menus' );

// Check to see if the menus options is supported by this theme
if (function_exists('add_theme_support')) {
	add_theme_support( 'menus' );
}

// Register a single location
//register_nav_menu();

// Register multiple locations
/*register_nav_menus(array(
	'header', __( 'Header navigation menu' ),
	'footer', __( 'Footer navigation menu' )
));*/

/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 * Featured Image 
 *
 * Thumbnail is an image that is chosen as the representative image for Posts, Pages or Custom Post Types.
 */

// Post Thumbnails (WordPress 2.9)
add_theme_support( 'post-thumbnails' );

/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 * WordPress Sidebar
 *
 * register_sidebar builds the definition for a single sidebar.
 * register_sidebars allows for the creation of 1 or more sidebars.
 * Sidebars often contain links, calendars, ads, additional cotent relative to the general location.
 */

register_sidebar( array(
	'name' => 'My Dynamic Sidebar',
	'id' => 'my_dynamic_sidebar',
	'before_widget' => '<div id="%1$s" class="%2$s widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));

/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 * Custom Functions
 *
 */

// Search by category
// WordPress does not contain a template tag for retrieving a category by its name
// so we need to create a function to do so.
function search_by_category_name( $category_name ) {
	// Get the ID of a given category
	$category_id = get_cat_ID( $category_name );
				
	// Return the category ID
	echo $category_id;
}
?>