<?php
$blog_posts = new WP_Query( array( 'post_type' => 'post', 'post_status’' => 'publish', 'posts_per_page' => -1 ) );
?>
<div class = "page-container">
    <div class = "main-content">
        <?php if ( $blog_posts->have_posts() ) : ?>
        <div class = "blog-posts">
        <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>

        <p><a class = "post-title" href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>

        <?php endwhile; ?>
        </div> 
        <?php else: ?>
        <p class = "no-blog-posts">
        <?php esc_html_e('Sorry, no posts matched your criteria.', 'theme-domain'); ?> 
        </p>
        <?php endif; 
        wp_reset_postdata(); ?>
    </div>
</div>
