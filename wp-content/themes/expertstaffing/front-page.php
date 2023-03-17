<?php get_header(); ?>
    <div id="banner">
        <div class="bnr_bg">
            <figure><img src="<?php bloginfo('template_url');?>/assets/images/bnr_bg.jpg" alt=""></figure>
        </div>
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

                    <div id="player"></div>

                </div>
                <div class="video_sidebar">
                    <h2>More Videos</h2>
                    <div class="video_list">
                        <?php for ($i = 0; $i <= 10; $i++) { ?>
                        <section onclick="onVideoListClick('w_2y7YyS8SQ')">
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
                        <li>INTERESTS</li>
                    </ul>
                    <div class="categories_tab_mobile">
                        <select name="categories_select" onchange="categoriesTabChange()" id="categories_select">
                            <option value="1">NEWS</option>
                            <option value="2">INDUSTRY</option>
                            <option value="3">TECHNOLOGY</option>
                            <option value="4">INTERESTS</option>
                        </select>
                    </div>
                </div>
                <div class="categories_content">
                    <div class="categories_boxes">
                        <?php for ($i = 0; $i < 12; $i++) { ?>
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
                                <li class="active">Latest Stories</li>
                                <li>Most Read</li>
                            </ul>
                        </div>
                        <div class="categories_sidebar_content">
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
    </div>

    <div id="job_openings">
        <div class="wrapper">
            <div class="job_openings_con">
                <div class="job_openings_info">
                    <h2>Job Openings</h2>
                </div>
                <div class="job_openings_boxes">
                    <section>
                        <h2>Business Development Officer</h2>
                        <a href="#!"></a>
                    </section>
                    <section>
                        <h2>Appointment Setter</h2>
                        <a href="#!"></a>
                    </section>
                    <section>
                        <h2>DevOps Engineer</h2>
                        <a href="#!"></a>
                    </section>
                    <section>
                        <h2>Talent Acquisition Specialist</h2>
                        <a href="#!"></a>
                    </section>
                    <section>
                        <h2>Corporate Appointment Setter</h2>
                        <a href="#!"></a>
                    </section>
                    <section>
                        <h2>Sales Representative</h2>
                        <a href="#!"></a>
                    </section>
                    <section>
                        <h2>UI/UX Designer</h2>
                        <a href="#!"></a>
                    </section>
                    <section>
                        <h2>Graphic Designer</h2>
                        <a href="#!"></a>
                    </section>
                    <section>
                        <h2>Front-end Developer</h2>
                        <a href="#!"></a>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>