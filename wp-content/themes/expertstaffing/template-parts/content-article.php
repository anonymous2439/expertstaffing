

<div class="main_content">
    <div class="main_content_header">
        <h1><?php the_title(); ?></h1>
        <ul>
            <li><?php echo get_the_category()[0]->name; ?></li>
            <li><?php the_date(); ?></li>
            <li><?php echo get_comments_number(); ?></li>
        </ul>
    </div>
    <figure class="featured_img"><?php the_post_thumbnail(); ?></figure>
    <?php the_content(); ?>
    <div class="clearfix"></div>
</div>

<?php $conclusion = get_post_meta(get_the_ID(), 'conclusion', true); ?>
<div id="conclusion">
    <?php if (!empty($conclusion)): ?>
        <div class="conclusion_content">
            <h2>Conclusion</h2>
            <p><?php echo $conclusion; ?></p>
        </div>
    <?php endif; ?>

    <div class="social">
        <p>Find this useful? Share us!</p>
        <ul>
            <li><a href="https://www.facebook.com/Eventomax" target="_blank"><figure><img src="<?php bloginfo('template_url');?>/assets/images/facebook2.svg" alt="facebook"></figure></a></li>
            <li><a href="https://www.linkedin.com/company/eventomax/" target="_blank"><figure><img src="<?php bloginfo('template_url');?>/assets/images/linkedin2.svg" alt="linked-in"></figure></a></li>
            <li><a href="https://www.instagram.com/eventomax/" target="_blank"><figure><img src="<?php bloginfo('template_url');?>/assets/images/instagram2.svg" alt="instagram"></figure></a></li>
            <li><a href="https://www.youtube.com/@eventomax" target="_blank"><figure><img src="<?php bloginfo('template_url');?>/assets/images/youtube2.svg" alt="youtube"></figure></a></li>
            <li><a href="https://www.tiktok.com/@eventomax?_t=8XYtDsoVENG&_r=1" target="_blank"><figure><img src="<?php bloginfo('template_url');?>/assets/images/tiktok2.svg" alt="tiktok"></figure></a></li>
            <li><a href="https://twitter.com/eventomax" target="_blank"><figure><img src="<?php bloginfo('template_url');?>/assets/images/twitter2.svg" alt="twitter"></figure></a></li>
        </ul>
    </div>
</div>

<?php comments_template(); ?>
<div class="clearfix"></div>