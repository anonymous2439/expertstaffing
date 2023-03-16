<?php the_post_thumbnail('small'); ?>
<h3 class="post_title"><?php the_title(); ?></h3>
<p class="post_date"><?php the_time('F j, Y g:i a'); ?> | by <?php the_author_posts_link(); ?> | Posted in 

<?php 
    $categories = get_the_category(); 
    $separator = ", ";
    $output = '';
    if($categories){
        foreach($categories as $category){
            $output .= '<a href="'.get_category_link($category->term_id).'">'. $category->cat_name . '</a>' . $separator;
        }
        echo trim($output, $separator);
    }
?> </p>

<p class="post_intro">
<?php the_excerpt(); ?>
</p>
<a class="more_link" href="<?php the_permalink();?>">Read more &rarr;</a>