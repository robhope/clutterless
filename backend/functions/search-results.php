<?php
/**
 *
 * @package clutterless
 * @since clutterless 1.8
 * @license CC BY 3.0
 * 
 */

// -------------------------------------------------------------
// Set number of archive & search results
// -------------------------------------------------------------

add_filter('pre_get_posts', 'clutterless_change_wp_search_size'); // Hook our custom function onto the request filter
function clutterless_change_wp_search_size($query) {
	if ( $query->is_search ) // Make sure it is a search page
	    $query->query_vars['posts_per_page'] = 100; // Change 100 to the number of posts you would like to show
	return $query; // Return our modified query variables
}

add_filter('pre_get_posts', 'clutterless_change_wp_archive_size'); // Hook our custom function onto the request filter
function clutterless_change_wp_archive_size($query) {
	if ( $query->is_archive ) // Make sure it is a search page
	    $query->query_vars['posts_per_page'] = 100; // Change 100 to the number of posts you would like to show
	return $query; // Return our modified query variables
}
