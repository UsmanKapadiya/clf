jQuery(window).on("load", function() {

	

	// Centered Play icon (Videos)

	var $latest_video = jQuery('.latest-video');

	if ($latest_video.length) {

		$latest_video.each(function() {

			var lv_s = jQuery(this).find('a span');

			var lv_w = jQuery(this).width();

			var lv_h = jQuery(this).height();

			lv_s.css('left',(lv_w/2)-26);

			lv_s.css('top',(lv_h/2)-46);

		})

	}

	// Flexslider

	jQuery('.flexslider').flexslider({

		directionNav: true,

		smoothHeight: true,

		slideshow: Boolean(ThemeOption.slider_auto),

		after: function(slider){

		var currentSlide = slider.slides.eq(slider.currentSlide);

		currentSlide.siblings().each(function() {

			var src = jQuery(this).find('iframe').attr('src');

			jQuery(this).find('iframe').attr('src',src);

		});

		}	 

	});



	var $listing = jQuery('.listing');

	if ($listing.length) {

		$listing.equalHeights();

	}



	var $discography = jQuery('.discography');

	if ($discography.length) {

		$discography.equalHeights();

	}





	var $container = jQuery('.filter-container');

	if ($container.length > 0) {

		//latest year
		var lastNav = jQuery('.filters-nav li').last().find('a').attr('data-filter');
		//remove selected *
		jQuery('.filters-nav li').siblings().find("[data-filter='*']").removeClass('selected');
		//add selected to lated year
		jQuery('.filters-nav li').last().find('a').addClass('selected');
		
		$container.isotope({
			filter: lastNav,
		});		

		// filter items when filter link is clicked

		jQuery('.filters-nav li a').click(function(){

			var selector = jQuery(this).attr('data-filter');

			jQuery(this).parent().siblings().find('a').removeClass('selected');

			jQuery(this).addClass("selected");

		

			$container.isotope({ 

				filter: selector,

				animationOptions: {

					duration: 750,

					easing: 'linear',

					queue: false

				}

			});

		

			return false;

		});

	}	



});



jQuery(document).ready(function($) {



	// Main navigation

	$('ul.sf-menu').superfish({ 

		delay:       1000,

		animation:   {opacity:'show'},

		speed:       'fast',

		dropShadows: false

	});



	/* -----------------------------------------

	 Responsive Menus Init with jPanelMenu

	 ----------------------------------------- */

	var jPM = $.jPanelMenu({

		menu: '#navigation',

		trigger: '.menu-trigger',

		excludedPanelContent: "style, script, #wpadminbar"

	});



	var jRes = jRespond([

		{

			label: 'mobile',

			enter: 0,

			exit: 959

		}

	]);



	jRes.addFunc({

		breakpoint: 'mobile',

		enter: function() {

			jPM.on();

		},

		exit: function() {

			jPM.off();

		}

	});



	// Tour dates widget

	var $w_tour_dates = $('.widget .tour-dates li');

	if ($w_tour_dates.length) {

		$w_tour_dates.equalHeights();

	}

	

	// Content videos

	var $post = $('.post');

	if ($post.length) {

		$post.fitVids();

	}

	

	// Video Slides

	var $video_slide = $('.video-slide');

	if ($video_slide.length) {

		$video_slide.fitVids();

	}

	

	// Tracklisting

	var $tracklisten = $('.track-listen');

	if ($tracklisten.length) {

		$tracklisten.click(function(){

			var target 		= $(this).siblings('.track-audio');

			var siblings	= $(this).parents('.track').siblings().children('.track-audio');

			siblings.slideUp('fast');

			target.slideToggle('fast');

			return false;

		});

	}

	

	// Tracklisting check subtitles

	var $track = $('.track');

	if ($track.length) {

		$track.each(function(){

			var main_head = $(this).find('.main-head');

			if (main_head.length == 0) 

				$(this).addClass('track-single');

		});

	}

	

	// Lightboxes

	var $pp = $("a[data-rel^='prettyPhoto']");

	if ($pp.length) {

		$pp.prettyPhoto({

			show_title: false,

			hook: 'data-rel',

			social_tools: false,

			theme: 'pp_woocommerce',

			horizontal_padding: 20,

			opacity: 0.8,

			deeplinking: false

		});



	}



	var $pp_video = $("a[data-rel^='pp_video']");

	if ($pp_video.length) {

		$pp_video.prettyPhoto({

			show_title: false,

			default_width: 480,

			default_height: 360,

			hook: 'data-rel',

			social_tools: false,

			theme: 'pp_woocommerce',

			horizontal_padding: 20,

			opacity: 0.8,

			deeplinking: false,

			changepicturecallback: function() {

				$('video:visible').mediaelementplayer();

			}

		});

	}





	/* -----------------------------------------

	 SoundManager2 Init

	 ----------------------------------------- */

	soundManager.setup({

		url: ThemeOption.swfPath

	});

		$('#schedule1').click(function() {
			$(this).toggleClass('is-active')
//			$(this).toggleText('See Schedule >', 'See Schedule');
			//$('#text-9').toggle();
			//$('#text-8').toggle();
			var text_8 = $('#text-8').html();
			var text_9 = $('#text-9').html();
			$('#schedule_expand1').html(text_9);
			$('#schedule_expand1').append(text_8);
			$('#schedule_expand1').toggle();

//$('.collapse').collapse()

})

	$('#schedule2').click(function() {
		$(this).toggleClass('is-active')
		//$('#text-7').toggle();
		//$('#text-6').toggle();
		var text_7 = $('#text-7').html();
		var text_6 = $('#text-6').html();
		$('#schedule_expand2').html(text_7);
		$('#schedule_expand2').append(text_6);
		$('#schedule_expand2').toggle();

//$('.collapse').collapse()

	})
/**
 * Slider for latest news
 */

 $('#post-loop-container').flexslider({
    animation: "slide",
    animationLoop: true, //Looping
    directionNav: false, //Display inbuilt navigation arrow
    controlNav: false, // Display pagination dots
    slideshow: false, //Auto slide
    itemWidth:  480 //May differ in responsive
  });

$('.previous').on('click', function(){
    $('#post-loop-container').flexslider('prev');
    return false;
})

$('.next').on('click', function(){
    $('#post-loop-container').flexslider('next');
    return false;
})



});







