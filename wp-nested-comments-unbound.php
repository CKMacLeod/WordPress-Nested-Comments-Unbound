<?php

/**
 * Plugin Name: WP Nested Comments Unbound
 * Description: Allows setting nested comments thread to any depth and creating "unbounded" nested threads
 * Plugin URI: http://www.ckmacleod.com/plugins/bigger-max-depth
 * Version:     1.1
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

//adds "super-max," "breakpoint," "leftturn" and "rightturn" classes

function bmd_comment_class( $classes ) {
    
    global $comment_depth;
    
    $breakpoint = 5;
    
    if ($comment_depth >= $breakpoint ) {

//super-max styles all comments higher than the initial breakpoint	
	
        $classes[] = 'super-max';
        
            if ( ( $comment_depth % $breakpoint == 0) ){
        
//breakpoint is added to comments at the specified breakpoint		
		
        $classes[] = 'breakpoint';
    }
        
    if ($comment_depth > $breakpoint) {
        
        if ( ceil(($comment_depth/$breakpoint)) % 2 == 0) {
		
//leftturn and righturn set styles for comments between breakpoints (e.g. for snaking effect)
            
        $classes[] = 'leftturn'; } 
		
		else {
            
        $classes[] = 'rightturn';
        
		}
    
	}

        }
	
    return $classes;

}

add_filter('comment_class','bmd_comment_class');


/*ENQUEUE STYLESHEET */
add_action('wp_enqueue_scripts', 'big_max_depth_stylesheet');

function big_max_depth_stylesheet() {
    wp_enqueue_style('bmd_style', plugins_url('style.css',__FILE__));
}
