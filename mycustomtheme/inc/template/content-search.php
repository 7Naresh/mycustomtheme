<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    <?php if( has_post_thumbnail() ): ?>
    <div class="img-thumbnail text-center"><?php the_post_thumbnail('medium'); ?></div>
    <?php endif; ?>
    <small class="my-3 d-block bg-light"><?php the_category(' '); ?> || <?php the_tags(); ?> ||
        <?php edit_post_link(); ?></small>
    <?php the_excerpt(); ?>
</article>