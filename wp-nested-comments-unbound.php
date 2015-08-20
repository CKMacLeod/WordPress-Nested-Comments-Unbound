<?php

/**
 * Plugin Name: WP Nested Comments Unbound
 * Description: Allows setting nested comments thread to any depth
 * Plugin URI: http://www.ckmacleod.com/plugins/bigger-max-depth
 * Version:     1.0
 * Author:      CK MacLeod
 * Author URI:  http://www.ckmacleod.com/
 * License:     GPL
 * To Do:       Add Max Depth, Breakpoint, and Styling as Admin Options
 */


//re-sets upper limit for "maximum depth" set in Admin/Discussions

if (is_admin()) {

function big_max_depth() {
    
    $new_max_depth = 999;

    return $new_max_depth;
                }

add_filter('thread_comments_depth_max','big_max_depth');


}

//adds "super-max" comment class based on "breakpoint" depth - 

function bmd_comment_class( $classes ) {
    
    global $comment_depth;
    
    $breakpoint = 10;
    
    if ($comment_depth > $breakpoint ) {

        $classes[] = 'super-max';

        }
        
    if ( ( $comment_depth % $breakpoint == 0) ){
        
        $classes[] = 'breakpoint';
        
    } 
	
        return $classes;
}

add_filter('comment_class','bmd_comment_class');


/*ENQUEUE STYLESHEET */
add_action('wp_enqueue_scripts', 'big_max_depth_stylesheet');

function big_max_depth_stylesheet() {
    wp_enqueue_style('bmd_style', plugins_url('style.css',__FILE__));
}
