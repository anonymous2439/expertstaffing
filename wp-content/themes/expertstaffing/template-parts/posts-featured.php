<?php $query = new WP_Query( array( 'category_name' => 'featured' ) ); ?>
<?php  if($query->have_posts()){ ?>
    <?php while($query->have_posts()){ ?>
        <div>
            <?php $query->the_post(); ?>
            <?php the_post_thumbnail('small'); ?>
            <p><?php comments_number(false, false, '% comments'); ?></p>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <p><?php the_content(); ?></p>
        </div>
    <?php } ?>
<?php } ?>
<?php wp_reset_postdata(); ?>