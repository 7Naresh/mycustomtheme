<?php
/**
 * The template for displaying 404 pages
 */

get_header(); ?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <div id="primary" class="content-area error_page">
                <div id="content" class="site-content" role="main">

                    <header class="page-header">
                        <h1 class="page-title"><?php _e( ' Oops! 404 Not Found', 'My Custom Theme' ); ?></h1>
                    </header>

                    <div class="page-wrapper">
                        <div class="page-content">
                            <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'My Custom Theme' ); ?></h2>
                            <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'My Custom Theme' ); ?>
                            </p>

                            <?php get_search_form(); ?>
                        </div><!-- .page-content -->
                    </div><!-- .page-wrapper -->
                </div><!-- #content -->
            </div><!-- #primary -->
        </div>
    </div>
</div>

<?php get_footer(); ?>