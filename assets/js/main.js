

(function ($) {
	"use strict";

	jQuery(document).ready(function ($) {
		
		/* Slider Item Slide
		============================*/
		$(".slider").owlCarousel({
			items: 1,
			autoplay: true,
			loop: true,
			nav: false,
			dots: true,
			smartSpeed: 500
		});
		
		/* Testimonials Itesm Slide
		============================*/
		$(".testimonials").owlCarousel({
			items: 3,
			autoplay: true,
			loop: true,
			margin: 30,
			nav: false,
			dots: true,
			center: true,
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: 3,
				},
				1000: {
					items: 3,
				}
			}
		});
		
		/* Band Items Slide
		============================*/
		$(".brand-list").owlCarousel({
			items: 5,
			autoplay: true,
			loop: true,
			nav: false,
			dots: true,
			responsive: {
				0: {
					items: 2,
				},
				600: {
					items: 3,
				},
				1000: {
					items: 4,
				}
			}
		});


		/* Counter Up Active
		============================*/
		$('.counter').counterUp({
			delay: 10,
			time: 1000
		});

		/* Isotope Active
		============================*/
		$(".portfolio-area").imagesLoaded(function () {
			var grid = $(".grid").isotope({
				itemSelector: ".grid-item",
				percentPosition: true,
				masonry: {
					columnWidth: ".grid-item"
				}
			});

			$(".portfolio-menu").on("click", "button", function () {
				var filterValue = $(this).attr("data-filter");
				grid.isotope({
					filter: filterValue
				});
			});

			/* Isotope Menu Active
			============================*/
			$(".portfolio-menu button").on("click", function (event) {
				$(this)
					.siblings(".active")
					.removeClass("active");
				$(this).addClass("active");
				event.preventDefault();
			});
		});


		/* Magnific Image Popup
		============================*/
		$('.gallery').magnificPopup({
			type: 'image',
			gallery: {
				enabled: true
			}
		});
		
		/* Magnific Video Popup
		============================*/
		$('.video-popup').magnificPopup({
			type: 'iframe'
		});

		/* Scroll To Top
		============================*/
		$.scrollUp({
			scrollText: '<span class="fa fa-long-arrow-up"></span>',
			easingType: 'linear',
			scrollSpeed: 900,
			animation: 'fade'
		});


		/* One Page Nav
		============================*/
		$('.mainmenu ul').onePageNav({
			currentClass: 'current',
			changeHash: false,
			scrollSpeed: 750,
			scrollThreshold: 0.5,
			easing: 'swing',
			scrollOffset: 60
		});
	});


	jQuery(window).load(function () {

		/* Sticky Header
		============================*/
		$(window).on('scroll', function () {
			if ($(this).scrollTop() > 20) {
				$('.header-fixed').addClass("sticky");
			} else {
				$('.header-fixed').removeClass("sticky");
			}
		});

		/* Preloader Active
		============================*/
		$(".preloader").fadeOut()
	});
}(jQuery));