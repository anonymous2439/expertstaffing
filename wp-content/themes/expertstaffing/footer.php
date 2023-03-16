<div class="footer">
    <div class="wrapper">
        <div class="footer_con">

            <div class="footer_social">
                <h2>Share us!</h2>
                <ul>
                    <li><a href="#!"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="facebook"></figure></a></li>
                    <li><a href="#!"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.svg" alt="linked-in"></figure></a></li>
                    <li><a href="#!"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="instagram"></figure></a></li>
                    <li><a href="#!"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.svg" alt="youtube"></figure></a></li>
                    <li><a href="#!"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tiktok.svg" alt="tiktok"></figure></a></li>
                    <li><a href="#!"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.svg" alt="twitter"></figure></a></li>
                </ul>
            </div>

            <div class="footer_info">
                <p>Change and switch up your subscription as often as you wish, with ease.</p>
                <a href="https://www.eventomax.com/">eventomax.com</a>
            </div>

            <div class="footer_nav">
                <h2>Quick Link</h2>
                <?php 
                    wp_nav_menu(
                        array(
                            'menu' => 'footer',
                            'container' => '',
                            'theme_location' => 'footer',
                            'items_wrap' => '<ul id="" class="">%3$s</ul>'
                        )
                    );
                ?>
            </div>

            <div class="contact_info">
                <h2>Contact</h2>
                <ul>
                    <li><a href="tel:+639088970929">+63 908 897 0929 (PH)</a></li>
                </ul>
            </div>

            <div class="footer_location">
                <h2>Registered Address</h2>
                <address>SBPO Bldg. Hernan Cortes, Mandaue City, <span>Cebu, PH 6014</span></address>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6413.154501285588!2d123.92020958774751!3d10.340106837364864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a998fc487cae01%3A0x440f05e87d38f499!2sEventomax%20Inc.!5e0!3m2!1sen!2sph!4v1678159224270!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
                
            <div>
                <p class="copyright">
                &copy; Copyright
                <?php
                $start_year = '2023';
                $current_year = date('Y');
                $copyright = ($current_year == $start_year) ? $start_year : $start_year.' - '.$current_year;
                echo $copyright;
                ?>
                Eventomax Inc.</p>
            </div>

        </div>
    </div>
</div>



<span class="back_top"></span>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/slick/slick.min.js"></script>
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> -->
<script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>
</body>
</html>