<?php get_header(); ?>

    
    <article>
        <div class="sidebar">
            <p>start sidebar</p>
            <?php get_template_part('template-parts/content-posts'); ?>
            <p>end sidebar</p>
        </div>
        <main>
            <?php
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        
                        get_template_part('template-parts/content-article');
                    }
                }
            ?>
        </main>

    </article>
<?php get_footer(); ?>