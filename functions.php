<?php

/*** Child Theme Function  ***/

if ( !function_exists( 'sahel_elated_child_theme_enqueue_scripts' ) ) {
	function sahel_elated_child_theme_enqueue_scripts() {
		$parent_style = 'sahel-elated-default-style';
		
		wp_enqueue_style( 'sahel-elated-child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
	}
	
	add_action( 'wp_enqueue_scripts', 'sahel_elated_child_theme_enqueue_scripts' );
}