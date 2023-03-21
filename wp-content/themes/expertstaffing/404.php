<?php get_header(); ?>
    <article>
    
        <div class="fourzerofour">
            <div class="wrapper">
                <div class="fourzerofour_con">
                    <div class="fourzerofour_img">
                        <figure><img src="<?php bloginfo('template_url');?>/assets/images/fourzerofour.svg" alt="four zero four graphic"></figure>
                    </div>
                    <h1 class="fourzerofour_text">Oops! Seems like the page that your looking for does not exist or an error occurred.</h1>
                    <div class="home_btn">
                        <a href="<?php echo get_home_url(); ?>">Go back to Home</a>
                    </div>
                    <div class="fourzerofour_watermark">
                        <figure><img src="<?php bloginfo('template_url');?>/assets/images/fourzerofour_watermark.png" alt="eventomax logo"></figure>
                    </div>
                </div>
            </div>
        </div>
        <!--?php
            get_search_form();
        ?-->

    <!--?php the_posts_pagination(); ?-->
    </article>
<?php get_footer(); ?>