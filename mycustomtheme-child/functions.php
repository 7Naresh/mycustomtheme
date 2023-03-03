<?php
function my_child_theme_enqueue_styles() {
	wp_enqueue_style( 'child-style',
		get_stylesheet_uri(),
		array( 'parenthandle' ),
		wp_get_theme()->get( 'Version' )
		);
		
	//wp_enqueue_style('style', get_stylesheet_directory_uri() .'/assets/css/style.css');
}
add_action( 'wp_enqueue_scripts', 'my_child_theme_enqueue_styles' );
