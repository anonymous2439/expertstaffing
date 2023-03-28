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
                    <ul class="social">
                        <li><a target="_blank" href="https://www.facebook.com/Eventomax"><figure><img src="<?php bloginfo('template_url');?>/assets/images/facebook.svg" alt="facebook"></figure></a></li>
                        <li><a target="_blank" href="https://www.youtube.com/@eventomax"><figure><img src="<?php bloginfo('template_url');?>/assets/images/youtube.svg" alt="youtube"></figure></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/eventomax/"><figure><img src="<?php bloginfo('template_url');?>/assets/images/linkedin.svg" alt="linkedin"></figure></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/eventomax/"><figure><img src="<?php bloginfo('template_url');?>/assets/images/instagram.svg" alt="instagram"></figure></a></li>
                        <li><a target="_blank" href="https://www.tiktok.com/@eventomax?_t=8XYtDsoVENG&_r=1"><figure><img src="<?php bloginfo('template_url');?>/assets/images/tiktok.svg" alt="tiktok"></figure></a></li>
                        <li><a target="_blank" href="https://twitter.com/eventomax"><figure><img src="<?php bloginfo('template_url');?>/assets/images/twitter.svg" alt="twitter"></figure></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div id="videos">
        <div class="wrapper">
            <div class="videos_con">
                <div class="selected_video">

                    <div id="player">
                        <?php
                        $default_video = get_default_video();
                        // Get the value of the 'player' GET parameter
                        $player_id = $_GET['player'] ?? $default_video->video_id;

                        // Generate the embedded YouTube video player with the correct ID
                        ?>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $player_id; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>

                </div>
                <div class="video_sidebar">
                    <h2>More Videos</h2>
                    <div class="video_list">

                        <?php 
                            $videos = get_all_video_details();

                            foreach ($videos as $video) { ?>
                                <section onclick="onVideoListClick('<?php echo esc_attr( $video->video_id ); ?>')">
                                    <figure><img src="https://img.youtube.com/vi/<?php echo esc_attr( stripslashes($video->video_id )); ?>/1.jpg" alt="<?php echo esc_attr( $video->title ); ?>"></figure>
                                    <h3><?php echo esc_html( stripslashes($video->title) ); ?></h3>
                                    <p>By <?php echo esc_html( stripslashes($video->owner) ); ?> <span></span></p>
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
                    <a href="latest-posts">View more</a>
                </div>

                <div class="latest_posts_boxes">


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
                                    echo '<p style="color:#fff;">Stay tuned for upcoming content.</p>';
                                }
                                
                            ?>



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

                        <?php get_template_part('template-parts/content-archive'); ?>
                                        
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
                    <?php dynamic_sidebar('job-openings'); ?>
                </div>
                
            </div>
        </div>
    </div>
    <?php get_footer(); ?>