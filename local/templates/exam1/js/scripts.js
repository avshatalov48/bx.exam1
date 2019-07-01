$(document).ready(function(){


	//menu mobile
	$('.nav .menu>ul>li>a').on('click', function() {
		if ($('.wrap').width()<768) {
			if ($(this).next('ul').length>0) {
				if ($(this).parent().hasClass('open')) {
					$('.nav .open').removeClass('open');
				} else {
					$('.nav .open').removeClass('open');
					$(this).parent().addClass('open');
				}
				return false;
			}
		}
	})
	

	//popup block
	$('.popup-wrap .btn-toggle').on('click touchstart', function() {
		if ($(this).hasClass('active')) {
			$(this).removeClass('active')
		} else {
			$('.popup-wrap:not(.popup-no-close) .btn-toggle').removeClass('active');
			$(this).addClass('active');
		}
		return false;
	})
	$(document).click(function(event) {
	    if ($(event.target).closest(".popup-block").length) return;
	    $('.popup-wrap:not(.popup-no-close) .btn-toggle').removeClass('active');
	    event.stopPropagation();
	});

	//menu mobile
	$('.nav .btn-close, .nav .menu-overlay').on('click touchstart', function() {
		$('.nav .btn-toggle').removeClass('active');
		return false;
	})


	//side menu
	$('.side-menu .submenu>a').on('click', function() {
		$(this).parent().toggleClass('open');
		return false;
	})


	//catalog slider
	$('.catalog-box .slider').owlCarousel({
		loop: true,
		nav: true,
		dots: false,
		smartSpeed: 1000,
		fluidSpeed: 1000,
		autoplaySpeed: 1000,
		navSpeed: 1000,
		dotsSpeed: 1000,
		dragEndSpeed: 1000,
		responsiveRefreshRate: 100,
		responsive: {
			0: {items: 1},
			600: {items: 2},
			720: {items: 3},
			768: {items: 2},
			1000: {items: 3},
		}
	})

	//photos box
	$('.photos-box .preview-block .slider').owlCarousel({
		items: 3,
		loop: true,
		nav: true,
		dots: false,
		smartSpeed: 1000,
		fluidSpeed: 1000,
		autoplaySpeed: 1000,
		navSpeed: 1000,
		dotsSpeed: 1000,
		dragEndSpeed: 1000,
		responsiveRefreshRate: 100
	})
	$('.photos-box .main-block .item').eq($('.photos-box .preview-block .item.active').parent('.sl-item').attr('data-slide')).addClass('active');
	$('.photos-box .preview-block .item').on('click', function () {
	    if ($(this).hasClass('active')) {} else {
	        $('.photos-box .preview-block .item.active').removeClass('active');
	        $('.photos-box .main-block .item').removeClass('active')
	            .eq($(this).parent().attr('data-slide')).addClass('active');
	        $(this).addClass('active');
	    }
	    return false;
	})


	//main slider box
	$('.main-slider-box .slider').owlCarousel({
		items: 1,
		loop: true,
		nav: false,
		dots: true,
		smartSpeed: 1000,
		fluidSpeed: 1000,
		autoplaySpeed: 1000,
		navSpeed: 1000,
		dotsSpeed: 1000,
		dragEndSpeed: 1000,
		responsiveRefreshRate: 100,
		autoplay: true,
		autoplayTimeout: 5000,
	})


	//opins slider
	$('.opins-slider-box .slider').owlCarousel({
		loop: true,
		nav: true,
		dots: false,
		smartSpeed: 1000,
		fluidSpeed: 1000,
		autoplaySpeed: 1000,
		navSpeed: 1000,
		dotsSpeed: 1000,
		dragEndSpeed: 1000,
		responsiveRefreshRate: 100,
		responsive: {
			0: {items: 1},
			860: {items: 2},
		}
	})
	
	
		
	//rew slider footer
	$('.rew-footer-carousel').owlCarousel({
		autoplay:true,
		dots: true,
		loop:true,
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	})



	//frm login
	$('.frm-login .btn-close').on('click', function() {
		$(this).parents('li').children('.btn-toggle').removeClass('active');
		return false;
	})
});