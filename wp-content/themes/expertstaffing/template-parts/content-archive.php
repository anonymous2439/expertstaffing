
<?php
    $cat = 'news';
    if(isset($_GET['category']))
        $cat = $_GET['category'];

    $args = array(
        'category_name' => $cat,
        'posts_per_page' => -1
    );
    $query = new WP_Query($args);

    if($query->have_posts()){
        while($query->have_posts()){
            $query->the_post();
            ?>
            
            <section>

            <figure><?php the_post_thumbnail('small'); ?></figure>
            <div class="categories_box_info">
                <h4 class="post_date"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?> </h4>

                <h2 class="post_intro">
                    <?php the_title(); ?>
                </h2>
                <a class="more_link" href="<?php the_permalink();?>">Read more &rarr;</a>
            </div>

            </section>

            <?php 
        }
        wp_reset_postdata();
    }
    else{
        echo '<section style="border:none !important;"><h4 style="color:#fff;width:100% !important;">Stay tuned for upcoming content.</h4></section>';
    }
    ?>