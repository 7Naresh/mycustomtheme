<?php
function my_theme_enqueue_styles() {
	wp_enqueue_style( 'child-style',
		get_stylesheet_uri(),
		array( 'parenthandle' ),
		wp_get_theme()->get( 'Version' ) // This only works if you have Version defined in the style header.
	);
	
	//wp_enqueue_style('style', get_template_directory_uri() .'/style.css');
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
