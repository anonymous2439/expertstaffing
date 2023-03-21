<?php 
$test_mode = true; 
$test_data = 0;
if($test_mode)
    $test_data = 0;
?>

<?php get_header(); ?>
    <div class="is-home"></div>
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
                        <li><a target="_blank" href="https://www.facebook.com/Eventomax"><figure><img src="<?php bloginfo('template_url');?>/assets/images/facebook.svg" alt="facebook"></figure></a></li>
                        <li><a target="_blank" href="https://www.youtube.com/@eventomax"><figure><img src="<?php bloginfo('template_url');?>/assets/images/youtube.svg" alt="youtube"></figure></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/eventomax/"><figure><img src="<?php bloginfo('template_url');?>/assets/images/linkedin.svg" alt="linkedin"></figure></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/eventomax/"><figure><img src="<?php bloginfo('template_url');?>/assets/images/instagram.svg" alt="instagram"></figure></a></li>
                        <li><a target="_blank" href="https://www.tiktok.com/@eventomax?_t=8XYtDsoVENG&_r=1"><figure><img src="<?php bloginfo('template_url');?>/assets/images/tiktok.svg" alt="tiktok"></figure></a></li>
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

                        <section onclick="onVideoListClick('wrN4GtXm4DY')">
                            <figure><img src="https://img.youtube.com/vi/wrN4GtXm4DY/1.jpg" alt=""></figure>
                            <h3>How to Ace a Job?</h3>
                            <p>By Eventomax <span></span></p>
                        </section>
                        <section onclick="onVideoListClick('w_2y7YyS8SQ')">
                            <figure><img src="https://img.youtube.com/vi/w_2y7YyS8SQ/1.jpg" alt=""></figure>
                            <h3>Why Virtual Assistants are essential?</h3>
                            <p>By Eventomax <span></span></p>
                        </section>
                        <section onclick="onVideoListClick('8jCbJg4SlKA')">
                            <figure><img src="https://img.youtube.com/vi/8jCbJg4SlKA/1.jpg" alt=""></figure>
                            <h3>Eventomax offers HR Lifecycle Management Services!</h3>
                            <p>By Eventomax <span></span></p>
                        </section>
                        <section onclick="onVideoListClick('DnHb2boUsjs')">
                            <figure><img src="https://img.youtube.com/vi/DnHb2boUsjs/1.jpg" alt=""></figure>
                            <h3>Welcome to a new month full of possibilities!</h3>
                            <p>By Eventomax <span></span></p>
                        </section>
                        <section onclick="onVideoListClick('Xz2ksTTobT0')">
                            <figure><img src="https://img.youtube.com/vi/Xz2ksTTobT0/1.jpg" alt=""></figure>
                            <h3>Achieve maximum success by joining Eventomax</h3>
                            <p>By Eventomax <span></span></p>
                        </section>
                        <section onclick="onVideoListClick('rmMU8I8pPno')">
                            <figure><img src="https://img.youtube.com/vi/rmMU8I8pPno/1.jpg" alt=""></figure>
                            <h3>Revolutionize Your Business with Eventomax's Chat Support</h3>
                            <p>By Eventomax <span></span></p>
                        </section>

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
                    <a href="latest-posts">View more</a>
                </div>

                <div class="latest_posts_boxes">
                    <?php for ($i = 0; $i <= $test_data; $i++) { ?>

                        <?php 
                                $args = array(
                                    'post_type'      => 'post',
                                    'post_status'    => 'publish',
                                    'posts_per_page' => 10,
                                );
                                
                                $query = new WP_Query( $args );
                                
                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                        $query->the_post(); 
                            ?>
                                        
                                        <section>
                                            <figure><?php the_post_thumbnail('small'); ?></figure>
                                            <h2><?php the_title(); ?></h2>
                                            <a href="<?php the_permalink();?>"></a>
                                        </section>

                            <?php
                                    }
                                    wp_reset_postdata();
                                } else {
                                    // No posts found
                                }
                                
                            ?>


                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    
    <div id="categories">
        <div class="wrapper">
            <div class="categories_con">
                <div class="categories_tab" id="categories_tab">
                    <ul>
                        <li class="<?php echo (!isset($_GET['category']) || $_GET['category'] === 'news') ? 'active' : ''; ?>" id="news">NEWS</li>
                        <li class="<?php echo (isset($_GET['category']) && $_GET['category'] === 'industry') ? 'active' : ''; ?>" id="industry">INDUSTRY</li>
                        <li class="<?php echo (isset($_GET['category']) && $_GET['category'] === 'technology') ? 'active' : ''; ?>" id="technology">TECHNOLOGY</li>
                        <li class="<?php echo (isset($_GET['category']) && $_GET['category'] === 'interests') ? 'active' : ''; ?>" id="interests">INTERESTS</li>  
                    </ul>
                    <div class="categories_tab_mobile">
                        <select name="categories_select" id="categories_select">
                            <option value="news" <?php echo (!isset($_GET['category']) || $_GET['category'] === 'news') ? 'selected' : ''; ?>>NEWS</option>
                            <option value="industry" <?php echo (!isset($_GET['category']) || $_GET['category'] === 'industry') ? 'selected' : ''; ?>>INDUSTRY</option>
                            <option value="technology" <?php echo (!isset($_GET['category']) || $_GET['category'] === 'technology') ? 'selected' : ''; ?>>TECHNOLOGY</option>
                            <option value="interests" <?php echo (!isset($_GET['category']) || $_GET['category'] === 'interests') ? 'selected' : ''; ?>>INTERESTS</option>
                        </select>
                    </div>
                </div>
                <div class="categories_content">
                    <div class="categories_boxes categories_carousel">
                        <?php
                            for ($i = 0; $i <= $test_data; $i++) {
                                $cat = 'news';
                                if(isset($_GET['category'])){
                                    $cat = $_GET['category'];
                                }

                                $args = array(
                                    'category_name' => $cat,
                                    'posts_per_page' => 10
                                );
                                $query = new WP_Query($args);

                                if($query->have_posts()){
                                    while($query->have_posts()){
                                        $query->the_post();
                                        ?>
                                        <section>
                                            <?php get_template_part('template-parts/content-archive'); ?>
                                        </section>
                                        <?php 
                                    }
                                    wp_reset_postdata();
                                }
                            }
                        ?>

                    </div>
                    <div class="categories_sidebar">
                        <div class="categories_sidebar_tab">
                            <ul>
                                <li class="tab tab1 active" onclick="categoriesSidebarClick(1)">Latest Stories</li>
                                <li class="tab tab2" onclick="categoriesSidebarClick(2)">Most Read</li>
                            </ul>
                        </div>
                        <div class="categories_sidebar_content">
                            
                            <div class="latest_stories content content1">
                            <?php 
                                for ($i = 0; $i <= $test_data; $i++) {
                                $args = array(
                                    'post_type'      => 'post',
                                    'post_status'    => 'publish',
                                    'posts_per_page' => 20,
                                );
                                
                                $query = new WP_Query( $args );
                                
                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                        $query->the_post(); 
                            ?>
                                        
                                        <section>
                                            <figure><?php the_post_thumbnail('small'); ?></figure>
                                            <h3><?php the_title(); ?></h3>
                                            <p>By <?php echo get_the_author(); ?> <span><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span></p>
                                            <a href="<?php the_permalink();?>"></a>
                                        </section>

                            <?php
                                    }
                                    wp_reset_postdata();
                                } else {
                                    // No posts found
                                }
                                }
                            ?>
                            </div>

                            <div class="most_read content content2">
                                <?php 
                                $args = array(
                                    'post_type'      => 'post',
                                    'post_status'    => 'publish',
                                    'posts_per_page' => 10,
                                    'meta_key'       => 'post_views_count',
                                    'orderby'        => 'meta_value_num',
                                    'order'          => 'DESC',
                                );

                                $query = new WP_Query( $args );

                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                        $query->the_post(); 
                                ?>
                                                                        
                                        <section>
                                            <figure><?php the_post_thumbnail('small'); ?></figure>
                                            <h3><?php the_title(); ?></h3>
                                            <p>By <?php echo get_the_author(); ?> <span><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span></p>
                                            <a href="<?php the_permalink();?>"></a>
                                        </section>

                                <?php
                                    }
                                    wp_reset_postdata();
                                } else {
                                    // No posts found
                                }
                                ?>

                            </div>
                                    
                            
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