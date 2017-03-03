<?php
/**
 *
 * @package clutterless
 * @since clutterless 1.8
 * @license GPL 2.0
 * 
 */

// -------------------------------------------------------------
// AJAX loading archives
// -------------------------------------------------------------

function clutterless_pbd_alp_init() {

    global $wp_query;

    // Add code to index pages.
    /*if( !is_singular() ) {*/  
        // Queue JS and CSS

        wp_enqueue_script(
            'pbd-alp-load-posts',
            get_template_directory_uri().'/js/custom-code-min.js',
            array('jquery'),
            '1.0',
            true
        );

        // What page are we on? And what is the pages limit?
        
        $max = $wp_query->max_num_pages;
        $paged = ( get_query_var('paged') > 1 ) ? get_query_var('paged') : 1;

        // Add some parameters for the JS.
        wp_localize_script(
            'pbd-alp-load-posts',
            'pbd_alp',
            array(
                'startPage' => $paged,
                'maxPages' => $max,
                'nextLink' => next_posts($max, false)
            )
        );
 /* }*/
 }

 add_action('template_redirect', 'clutterless_pbd_alp_init');