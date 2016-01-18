<?php 

/*
Plugin Name: Alphabetize Posts
Description: Sorts your blog alphabetically instead of by date
Version:     1.0
Author:      Organized Themes
Author URI:  http://www.organizedthemes.com
 */

function alphabetize_main_posts( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
    }
}
add_action( 'pre_get_posts', 'alphabetize_main_posts' );