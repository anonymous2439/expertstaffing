
    <figure><?php the_post_thumbnail('small'); ?></figure>
    <div class="categories_box_info">
        <h4 class="post_date"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?> </h4>

        <!--?php 
            $categories = get_the_category(); 
            $separator = ", ";
            $output = '';
            if($categories){
                foreach($categories as $category){
                    $output .= '<a href="'.get_category_link($category->term_id).'">'. $category->cat_name . '</a>' . $separator;
                }
                echo trim($output, $separator);
            }
        ?--> 

        <h2 class="post_intro">
        <?php the_title(); ?>
        </h2>
        <a class="more_link" href="<?php the_permalink();?>">Read more &rarr;</a>
    </div>
