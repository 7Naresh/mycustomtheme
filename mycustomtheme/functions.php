<?php

if(!isset($content_width))
    $content_width = 800;

if(!function_exists('custom_theme_setup')):
    function custom_theme_setup(){
        // custom theme script
        function add_theme_scripts(){
            wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.css', array(), false, 'all');
            wp_enqueue_style('main_css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all');
            wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.js', array('jquery'), false, true);
            wp_enqueue_script('custom_js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), false, true);
            // function for comments to work properly
            if(is_singular() && comments_open() && get_option('thread_comments')){
                wp_enqueue_script('comment-reply');
            }
        }
        add_action('wp_enqueue_scripts','add_theme_scripts');

        // add theme support -> menu
        add_theme_support('menus');
        // register menus
        function register_custom_menus(){
            register_nav_menus(
                array(
                    'primary' => __('Primary'),
                    'footer' => __('Footer'),
                    'mobile' => __('Mobile')
                )
            );
        }
        add_action('init','register_custom_menus');
        // add theme support -> custom logo
        // custom logo
        $logo_defaults = array(
            'height' => 60,
            'width' => 100,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => array('site-title', 'site-description'),
            'unlink-homepage-logo' => false
        );
        add_theme_support('custom-logo', $logo_defaults);
        // add theme support -> post thumbnails
        add_theme_support('post-thumbnails');

        //remove comment form field
        // function remove_comment_url($arg) {
        //     $arg['url'] = '';
        //     return $arg;
        // }
        // function remove_comment_author($arg) {
        //     $arg['author'] = '';
        //     return $arg;
        // }
        // add_filter('comment_form_default_fields', 'remove_comment_url');
        // add_filter('comment_form_default_fields', 'remove_comment_author');

        // add theme support -> widgets
        add_theme_support('widgets');

        // register custom sidebar
        function my_custom_sidebar(){
            register_sidebar(
                array(
                    'id' => 'primary',
                    'name' => __('Primary Sidebar', 'Custom Theme'),
                    'description' => __('This is short description for sidebar'),
                    'before_widget' => '<aside id="%1$s" class="%2$s" >',
                    'after_widget' => '</aside>',
                    'before_title' => '<h3 class="widget-title">',
                    'after_title' => '</h3>'
                )
            );
        }
        add_action('widgets_init', 'my_custom_sidebar');

        // search form
        function wpdocs_my_search_form( $form ) {
            $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
            <div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
            <input type="text" value="' . get_search_query() . '" name="s" id="s" />
            <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
            </div>
            </form>';
        
            return $form;
        }
        add_filter( 'get_search_form', 'wpdocs_my_search_form' );

        //custom post type
        function custom_post_type(){
            $args = array(
                'labels' => array(
                    'name' => __('Flowers','textdomain'),
                    'singular_name' => __('Flower','textdomain')
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-palmtree',
                'supports' => array('title', 'editor', 'thumbnail')
            );
            register_post_type('flowers', $args);
        }
        add_action('init','custom_post_type');
        // register taxonomy
        //custom post type
        function custom_taxonomy(){
            $args = array(
                'labels' => array(
                    'name' => __('Colours','textdomain'),
                    'singular_name' => __('Colour','textdomain')
                ),
                'public' => true,
                'has_archive' => true
            );
            register_taxonomy('colours', array('flowers'), $args);
        }
        add_action('init','custom_taxonomy');
        //post formats
        add_theme_support('post-formats', array('aside', 'gallery'));

        // custom image sizes
        add_image_size( 'category-thumb', 300 ); // 300 pixels wide (and unlimited height)
	    add_image_size( 'small-size', 220, 180, true ); // (cropped)

        // include customizer file
        include('customizer.php');
}
endif;
add_action('after_setup_theme','custom_theme_setup');