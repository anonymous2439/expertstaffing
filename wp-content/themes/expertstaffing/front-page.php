<?php get_header(); ?>
    <div id="banner">
        <div class="wrapper">
            <div class="bnr_con">
                <div class="bnr_info">
                    <h1>Get Industry-Leading Insights at Your Fingertips!</h1>
                    <p>Stories Curated For You</p>
                    <ul>
                        <li><a href="https://www.facebook.com/Eventomax"><figure><img src="<?php bloginfo('template_url');?>/assets/images/facebook.svg" alt="facebook"></figure></a></li>
                        <li><a href="https://www.youtube.com/@eventomax"><figure><img src="<?php bloginfo('template_url');?>/assets/images/youtube.svg" alt="youtube"></figure></a></li>
                        <li><a href="https://www.linkedin.com/company/eventomax/"><figure><img src="<?php bloginfo('template_url');?>/assets/images/linkedin.svg" alt="linkedin"></figure></a></li>
                        <li><a href="https://www.instagram.com/eventomax/"><figure><img src="<?php bloginfo('template_url');?>/assets/images/instagram.svg" alt="instagram"></figure></a></li>
                        <li><a href="https://www.tiktok.com/@eventomax?_t=8XYtDsoVENG&_r=1"><figure><img src="<?php bloginfo('template_url');?>/assets/images/tiktok.svg" alt="tiktok"></figure></a></li>
                        <li><a href="https://twitter.com/eventomax"><figure><img src="<?php bloginfo('template_url');?>/assets/images/twitter.svg" alt="twitter"></figure></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div id="videos">
        <div class="wrapper">
            <div class="videos_con">
                <div class="selected_video">

                </div>
                <div class="video_sidebar">
                    <h2>More Videos</h2>
                    <div class="video_list">
                        <?php for ($i = 0; $i <= 10; $i++) { ?>
                        <section>
                            <figure><img src="<?php bloginfo('template_url');?>/assets/images/dummy_thumb.jpg" alt=""></figure>
                            <h3>What Is Bookkeeping And Its Importance To Business</h3>
                            <p>By Eventomax <span>13 hours ago</span></p>
                        </section>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="latest_posts">
        <div class="wrapper">
            <div class="latest_post_con">
                <div class="latest_posts_info">
                    <h2>Latest Posts</h2>
                    <a href="#!">View more</a>
                </div>
                <!--?php get_template_part('template-parts/posts-weekly'); ?-->
                <div class="latest_posts_boxes">
                    <?php for ($i = 0; $i <= 10; $i++) { ?>
                    <section>
                        <figure><img src="<?php bloginfo('template_url');?>/assets/images/dummy_latest_post.jpg" alt=""></figure>
                        <h2>What Is Bookkeeping And Its Importance To Business</h2>
                        <a href="#!"></a>
                    </section>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    
    <div id="categories">
        <div class="wrapper">
            <div class="categories_con">
                <div class="categories_tab">
                    <ul>
                        <li class="active">NEWS</li>
                        <li>INDUSTRY</li>
                        <li>TECHNOLOGY</li>
                        <li>BUSINESS</li>
                    </ul>
                </div>
                <div class="categories_content">
                    <div class="categories_boxes">
                        <?php for ($i = 0; $i < 4; $i++) { ?>
                        <section>
                            <figure><img src="<?php bloginfo('template_url');?>/assets/images/dummy_categories_box.jpg" alt=""></figure>
                            <div class="categories_box_info">
                                <h4>13 hours ago</h4>
                                <h2>What Is Bookkeeping And Its Importance To Business</h2>
                                <a href="#!"></a>
                            </div>
                        </section>
                        <?php } ?>
                    </div>
                    <div class="categories_sidebar">
                        <div class="categories_sidebar_tab">
                            <ul>
                                <li>Latest Stories</li>
                                <li>Most Read</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="bottom">
        <div class="wrapper">
            <div class="btm_con">
                
            </div>
        </div>
    </div>
    <?php get_footer(); ?>