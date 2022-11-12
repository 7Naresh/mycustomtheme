<?php get_header(); ?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-9">
            <?php if(have_posts()): while(have_posts()) : the_post(); ?>
            <?php get_template_part('inc/template/content', 'search'); ?>
            <?php endwhile; else: endif; ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>