<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/assets/slick/slick.css"/>
    <?php if(is_404()){ ?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/assets/css/404.css"/>
    <?php } ?>
    
    <?php wp_head(); ?>
    
    <?php if ( is_user_logged_in() ) { ?>
		<style>
		.right_nav_con{top:46px;}
		@media only screen
		and (min-width : 783px) {
            .right_nav_con{top:32px;}
		}
		@media only screen
		and (min-width : 1000px) {

		}
		</style>
	<?php }?>

</head>
<body class="<?php if(is_front_page()){ echo 'is-home'; }else{ echo 'non-home'; } ?>">
    <div class="header_holder">
<header>
    <div class="wrapper">
        <div class="header_con">
            <div class="main_logo animate__animated animate__bounce">
                <a href="<?php echo get_home_url(); ?>"><figure><img src="<?php bloginfo('template_url');?>/assets/images/main_logo.png" alt="expert staffing logo"></figure></a>
            </div>
            <div class="user_functions">
                <form action="<?php echo get_home_url(); ?>">
                    <input name="s" type="text" placeholder="Search Blogs">
                    <button type="submit"></button>
                </form>
                <!-- <div class="top_nav">
                    <a href="<?php echo get_home_url(); ?>/wp-login.php?action=register">Sign up</a>
                    <a href="<?php echo get_home_url(); ?>/wp-login.php">Log in</a>
                </div>
                <div class="hamburger_menu"></div>
                <div class="right_nav">
                    <div class="right_nav_con">
                        <div class="right_nav_menu">
                            <ul>
                                <li><a href="<?php echo get_home_url(); ?>/wp-login.php?action=register">Sign up</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/wp-login.php">Log in</a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</header>
<!-- <nav id="nav">
    <div class="main_nav">
        <div class="hamburger_menu"></div>
        <div class="top_nav">
            <div class="wrapper">
                <div class="top_nav_con">
                    <?php 
                    //  if(is_404())
                    //  {
                    //      wp_nav_menu(
                    //          array(
                    //              'menu' => 'page',
                    //              'container' => '',
                    //              'theme_location' => 'page',
                    //              'items_wrap' => '<ul id="" class="">%3$s</ul>'
                    //          )
                    //      );
                    //  }
                    //  else{
                    //     wp_nav_menu(
                    //         array(
                    //             'menu' => 'primary',
                    //             'container' => '',
                    //             'theme_location' => 'primary',
                    //             'items_wrap' => '<ul id="" class="">%3$s</ul>'
                    //         )
                    //     );
                    // }
                    ?>
                </div>
            </div>

        </div>
        <div class="left_nav">
            <div class="left_nav_overlay"></div>

            <div class="left_nav_con">
                <div class="left_nav_btn">X</div>
                <?php 
 
                        // wp_nav_menu(
                        //     array(
                        //         'menu' => 'primary',
                        //         'container' => '',
                        //         'theme_location' => 'primary',
                        //         'items_wrap' => '<ul id="" class="">%3$s</ul>'
                        //     )
                        // );
                    
                ?>
            </div>

        </div>
    </div>
</nav> -->
                </header>
                </div>