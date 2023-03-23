var options;
var action="click";
var speed="500";
var window_width;
var webHeight;
var player;

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
		speed: 300,
		autoplay: false,
		variableWidth: true,
		responsive: [
			{
				breakpoint: 1001,
				settings: {
					slidesToShow: 2,
				}
			},
		],
	};
	options2 = {
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		slidesPerRow: 2,
		mobileFirst: false,
		rows: 2,
		arrows: false,
		prevArrow: '<button type="button" class="slick-prev"></button>',
		nextArrow: '<button type="button" class="slick-next"></button>',
		dots: true,
		dotsClass: 'slick-dots',
		fade: false,
		speed: 300,
		autoplay: false,		
	};
	options3 = {
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		mobileFirst: false,
		arrows: false,
		prevArrow: '<button type="button" class="slick-prev"></button>',
		nextArrow: '<button type="button" class="slick-next"></button>',
		dots: true,
		dotsClass: 'slick-dots',
		fade: false,
		speed: 300,
		autoplay: false,
		variableWidth: true,
	};
	

	$(".latest_posts_boxes").slick(options);
	$(".categories_carousel").slick(options2);

	// toggle hamburger menu
	// $('.hamburger_menu').on("click", function(){
	// 	$('.right_nav').toggle("slow");
	// });

	
	// set default active nav
	// $(".top_nav ul li:first-child").addClass("active");
	// $(".right_nav ul li:first-child").addClass("active");

	// back to top
	$('.back_top').click(function () { // back to top
		$("html, body").animate({
			scrollTop: 0
		}, 900);
		return false;
	});

	$('#categories_tab li').click(function() {
		var category_name = $(this).attr('id');
    	window.location.href = '?category=' + category_name + '#categories_tab';
	});

	$('#categories_select').on('change', function() {
		var selectedOption = $(this).val();
    	window.location.href = '?category=' + selectedOption + '#categories_tab';
	  });


	function categoriesSidebarClick(n){
		$('.categories_sidebar_content .content').hide();
		$('.categories_sidebar_content .content'+n).show();
	
		$('.categories_sidebar_tab .tab').removeClass('active');
		$('.categories_sidebar_tab .tab'+n).addClass('active');
	}
	
	
	initPlayer();
	onResize();
});

function categoriesSidebarClick(n){
	$('.categories_sidebar_content .content').hide();
	$('.categories_sidebar_content .content'+n).show();

	$('.categories_sidebar_tab .tab').removeClass('active');
	$('.categories_sidebar_tab .tab'+n).addClass('active');
}


function onYouTubeIframeAPIReady(){
	
    if (document.readyState === 'complete') {
        initPlayer();
    } else {
        window.addEventListener('load', initPlayer);
    }
}

function initPlayer() {
	if ( $('body').hasClass('is-home') ) {
		player = new YT.Player('player', {
			videoId: "wrN4GtXm4DY",
			playerVars: {
				autoplay: 0,
				controls: 1,
				rel: 0,
				showinfo: 0,
				origin: "https://www.youtube.com"
			},
			events: {
				'onReady': onPlayerReady,
				'onStateChange': onPlayerStateChange,
			}
		});
	}
}

function onPlayerReady(event) {
	
}
  
function onPlayerStateChange(event) {
	if (event.data == YT.PlayerState.PLAYING) {
		document.getElementById('player').style.display = 'block';
	}
}

function onVideoListClick(id){
	if (player) {
		player.loadVideoById(id);
	} else {
		player = new YT.Player('player', {
			videoId: id,
			playerVars: {
				autoplay: 0,
				controls: 1,
				rel: 0,
				showinfo: 0,
				origin: "https://expertstaffingnews.com"
			},
			events: {
				'onReady': onPlayerReady,
				'onStateChange': onPlayerStateChange
			}
		});
	}
}


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
	$( document ).ready(function() {	
		onResize();
	});
});
function onResize(){
	window_width = $(window).width();
	if($('.categories_carousel').hasClass('slick-initialized'))
			$(".categories_carousel").slick("unslick");

	if( $(this).width() <= 1000 ) {
		$(".categories_carousel").slick(options3).slick("setPosition");
	}
	else{
		$(".categories_carousel").slick(options2).slick("setPosition");
	}
}
