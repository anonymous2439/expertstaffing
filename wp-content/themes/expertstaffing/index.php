<?php get_header(); ?>

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
                    <!-- <div class="categories_tab_mobile">
                        <select name="categories_select" onchange="onTabChange()" id="categories_select">
                            <option value="news">NEWS</option>
                            <option value="industry">INDUSTRY</option>
                            <option value="technology">TECHNOLOGY</option>
                            <option value="interests">INTERESTS</option>
                        </select>
                    </div> -->
                </div>
                <div class="categories_content">
                    <div class="categories_boxes categories_boxes_nonhome">
                        <?php
                        $cat = 'news';
                        if(isset($_GET['category']))
                            $cat = $_GET['category'];

                        $args = array(
                            'category_name' => $cat,
                            'posts_per_page' => -1
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
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <article>

        <div class="wrapper">
            <div class="article_con">
                
            </div>
        </div>

    <?php the_posts_pagination(); ?>
    </article>

    <?php get_footer(); ?>