<?php get_header(); ?>

    
    <article>

        <main>
            <div class="wrapper">
                <div class="main_con">
                <?php
                    if(have_posts()){
                        while(have_posts()){
                            the_post();
                            
                            get_template_part('template-parts/content-article');
                        }
                    }
                ?>
                </div>
            </div>
        </main>

    </article>

<?php get_footer(); ?>