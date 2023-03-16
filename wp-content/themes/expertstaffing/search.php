<?php get_header(); ?>
    <article>
        <?php get_search_form(); ?>
        <h2>Search results for: <?php the_search_query(); ?></h2>
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    
                    get_template_part('template-parts/content-archive', 'archive');
                }
            }
        ?>

    </article>
<?php get_footer(); ?>