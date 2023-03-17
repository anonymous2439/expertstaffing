<div class="footer">
    <div class="wrapper">
        <div class="footer_con">        
                
            <div>
                <p class="copyright">
                &copy; Copyright
                <?php
                $start_year = '2023';
                $current_year = date('Y');
                $copyright = ($current_year == $start_year) ? $start_year : $start_year.' - '.$current_year;
                echo $copyright;
                ?>
                 Expert Staffing News. All Rights Reserved.</p>
            </div>

        </div>
    </div>
</div>


<?php wp_footer(); ?>
<script src="https://www.youtube.com/player_api"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/slick/slick.min.js"></script>
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> -->
<script src="<?php bloginfo('template_url');?>/assets/js/plugins.js"></script>
</body>
</html>