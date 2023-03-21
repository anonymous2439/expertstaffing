<?php get_header(); ?>

    <article>
        <div class="search">
            <div class="wrapper">
                <div class="search_con">

                    <h2 id="search_title">Search results for: <?php the_search_query(); ?></h2>
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            's' => get_search_query()
                        );
                        $query = new WP_Query( $args );
                        if($query->have_posts()){
                            while($query->have_posts()){
                                $query->the_post();
                                
                                echo '<section>';
                                    get_template_part('template-parts/content-archive');
                                echo '</section>';
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </article>

<?php get_footer(); ?>
