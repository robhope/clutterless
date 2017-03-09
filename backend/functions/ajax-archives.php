<?php
/**
 *
 * @package clutterless
 * @since clutterless 1.8.4
 * @license GPL 2.0
 * 
 */

// -------------------------------------------------------------
// AJAX loading archives
// -------------------------------------------------------------

function clutterless_ajax_archives() {

    global $wp_query;

    // Enqueue JS if not singular post or page
    if ( ! is_singular() ) {
        wp_enqueue_script( 'clutterless-load-posts', get_template_directory_uri().'/frontend/js/ajax-archives-min.js', array('jquery'), clutterless_theme_version, true );
    }

    // What page are we on? And what is the pages limit?
    $max = $wp_query->max_num_pages;
    $paged = ( get_query_var('paged') > 1 ) ? get_query_var('paged') : 1;

    // Add some parameters for the JS.
    wp_localize_script(
        'clutterless-load-posts',
        'pbd_alp',
        array(
            'startPage' => $paged,
            'maxPages' => $max,
            'nextLink' => next_posts($max, false)
        )
    );
 }

 add_action('template_redirect', 'clutterless_ajax_archives');