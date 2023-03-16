<div>
    <?php the_post_thumbnail('banner'); ?>
    <p><?php the_date(); ?> </p>
    <p><?php the_tags('<span class="tag"></span>', '</span><span class="tag"></span>', '</span>'); ?></p>
</div>

<?php the_content(); ?>

<?php comments_template(); ?>