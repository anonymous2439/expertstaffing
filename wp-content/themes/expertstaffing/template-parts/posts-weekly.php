<?php
    $current_week = date("W");
    query_posts(array(
        'cat' => 'Blessing', // chosing category
        'date_query' => array('week' => $current_week), // choosing date range
        'posts_per_page' => '-1'// outputs all posts
    ));
?>
    <?php while (have_posts()) : the_post(); ?>
        <div>
            <?php the_post_thumbnail('small'); ?>
            <p><?php comments_number(false, false, '% comments'); ?></p>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <p><?php the_content(); ?></p>
        </div>
    <?php endwhile; ?>
