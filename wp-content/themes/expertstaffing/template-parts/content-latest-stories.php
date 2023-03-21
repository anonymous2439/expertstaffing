
<figure><?php the_post_thumbnail('small'); ?></figure>
    <div class="categories_box_info">
        <h4 class="post_date"><?php the_time('F j, Y g:i a'); ?> </h4>

        <h2 class="post_intro">
        <?php the_title(); ?>
        </h2>
        <a class="more_link" href="<?php the_permalink();?>">Read more &rarr;</a>
    </div>
