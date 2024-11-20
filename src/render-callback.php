<?php

function render_popular_posts_block( $attributes ) {
    // Ensure attributes are available
    $attributes = wp_parse_args( $attributes, array(
        'currentPage' => 1,
    ));

    // Example logic for whether more posts are available (you can adjust as needed)
    $has_more = true; // Replace with logic to determine if more posts exist

    // Build the button HTML
  
    $output .= '<div id="load-more-button-container" data-page="' . esc_attr( $attributes['currentPage'] ) . '" data-has-more="' . esc_attr( $has_more ? 'true' : 'false' ) . '">';
    $output .= '<button id="load-more-button">Load More</button>';
    $output .= '</div>';

    // Debugging: Check what is being rendered
    error_log( 'Load More Button HTML: ' . $output );

    // Return the output
    return $output;
}
 


