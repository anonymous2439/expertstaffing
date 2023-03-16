var options;
var action="click";
var speed="500";
var window_width;
var webHeight;
$( document ).ready(function() {	
	window_width = $(window).width();
	webHeight = $(document).height(),
	options = {
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: false,
		prevArrow: '<button type="button" class="slick-prev"></button>',
		nextArrow: '<button type="button" class="slick-next"></button>',
		dots: true,
		dotsClass: 'slick-dots',
		fade: false,
		infinite: true,
		mobileFirst: true,
		speed: 300,
		autoplay: false,		
	};

	$(".latest_posts_boxes").slick(options);

	// toggle side menu
	$('.left_nav_btn').on("click", function(){
		$('.left_nav_con').addClass('togglenav_hide').removeClass('togglenav_active');
		$('.left_nav_overlay, .right_nav').addClass('togglenavoverlay_hide').removeClass('togglenavoverlay_active');
	});
	$('.hamburger_menu').on("click", function(){
		$('.left_nav').attr('style', 'display:block !important');
		$('.left_nav_con').addClass('togglenav_active').removeClass('togglenav_hide');
		$('.left_nav_overlay, .right_nav').addClass('togglenavoverlay_active').removeClass('togglenavoverlay_hide');
	});

	
	// set default active nav
	$(".top_nav ul li:first-child").addClass("active");
	$(".right_nav ul li:first-child").addClass("active");

	// back to top
	$('.back_top').click(function () { // back to top
		$("html, body").animate({
			scrollTop: 0
		}, 900);
		return false;
	});
	
});


// on window scroll
$(window).scroll(function(){  // fade in fade out button
	var windowScroll = $(this).scrollTop();

	// fixed nav
	if (windowScroll > 120 && window_width >= 1000){

	} else {

	}

	if (windowScroll > (webHeight * 0.5) && window_width <= 999 ) {

	} else{

	};
});

// on screen resize
$(window).resize(function() {
	window_width = $(window).width();


	if( $(this).width() >= 1000 ) {

	}
	else if( $(this).width() >= 600 ) {
		
	}
	else{

	}
});