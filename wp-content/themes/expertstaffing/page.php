<?php get_header(); ?>

    <article>

        <h2><h1><?php the_title(); ?></h1></h2>
    
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();                    
                    get_template_part('template-parts/content-page', 'page');
                }
            }
        ?>

    </article>
<?php get_footer(); ?>