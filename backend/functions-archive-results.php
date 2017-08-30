<?php
/**
 *
 * @package clutterless
 * @since clutterless 2.5.2
 *  @license CCA 3.0
 * 
 */

#-------------------------------------------------------------
# Set number of archive results
#-------------------------------------------------------------

function clutterless_archive_query( $query ) {
if ( $query->is_archive() && $query->is_main_query() && !is_admin() ) {
        $query->set( 'posts_per_page', 100 );
    }
}
add_action( 'pre_get_posts', 'clutterless_archive_query' );

#-------------------------------------------------------------
# Set number of search results
#-------------------------------------------------------------

function clutterless_search_query( $query ) {
if ( $query->is_search() && $query->is_main_query() && !is_admin() ) {
        $query->set( 'posts_per_page', 100 );
    }
}
add_action( 'pre_get_posts', 'clutterless_search_query' );