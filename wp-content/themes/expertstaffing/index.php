<?php get_header(); ?>

    <div id="categories" class="categories_nonhome">
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
                    <div class="categories_boxes categories_boxes_nonhome">
                        
                                    <?php get_template_part('template-parts/content-archive'); ?>
                                
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