(function ($) {
	
	"use strict";

	var $document = $(document),
		$window = $(window),
		plugins = {
			mainSlider: $('#mainSlider'),
			slideNav: $('#slide-nav'),
			categoryCarousel: $('.category-carousel'),
			testimonialsCarousel: $('.testimonials-carousel'),
			testimonialsSingleCarousel: $('.testimonials-single-carousel'),
			testimonialsGrid: $('.testimonials-grid'),
			servicesCarousel: $('.text-icon-carousel'),
			servicesCarousel2: $('.text-icon-grid'),
			personCarousel: $('.person-carousel'),
			backToTop: $('.back-to-top'),
			submenu: $('[data-submenu]'),
			contactForm: $('#contactform'),
			quoteForm: $('#quoteform'),
			googleMapFooter: $('#footer-map'),
			iconSquared: $('.text-icon-squared'),
			counterBlock: $('#counterBlock'),
			testimonialsMoreLink: $('.view-more-testimonials'),
			postGallery: $('.blog-isotope'),
			postCarousel: $('.post-carousel'),
			postMoreLink: $('.view-more-post'),
			networkEffect: $('.network-effect'),
			animation: $('.animation')
		},
		$shiftMenu = $('#slidemenu, #page-content, body, .navbar, .navbar-header, .page-footer'),
		$navbarToggle = $('.navbar-toggle'),
		$dropdown = $('.dropdown-submenu, .dropdown'),
		$fullHeight = $('#mainSlider, #mainSlider .img--holder');
	
	/* ---------------------------------------------
     Scripts initialization
    --------------------------------------------- */
	
	$document.ready(function () {

		var windowWidth = window.innerWidth || $window.width();
		var windowH = $window.height();

		// set fullheigth
		if (windowWidth < 768) {
			$fullHeight.height('');
		} else {
			$fullHeight.height($window.height());
		}
		
		// detect touch
		var isTouchDevice = 'ontouchstart' in window || navigator.msMaxTouchPoints;
		if (isTouchDevice) {
			$('body').addClass('touch');
		}
		
		// main slider
		if (plugins.mainSlider.length) {
			var $el = plugins.mainSlider;
			$el.on('init', function (e, slick) {
				var $firstAnimatingElements = $('div.slide:first-child').find('[data-animation]');
				doAnimations($firstAnimatingElements);
			});
			$el.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
				var $currentSlide = $('div.slide[data-slick-index="' + nextSlide + '"]')
				var $animatingElements = $currentSlide.find('[data-animation]');
				doAnimations($animatingElements);
			});
			$el.slick({
				arrows: true,
				dots: false,
				autoplay: true,
				autoplaySpeed: 1000,
				fade: true,
				speed: 1000,
				pauseOnHover: false,
				pauseOnDotsHover: true
			});
		}

		// apply network effect
		if (plugins.networkEffect.length && !$('body').hasClass('touch')) {
			networkEffect();
		}

		// back to top button
		if (plugins.backToTop.length) {
			var backPos = plugins.backToTop.offset();
			if (backPos.top < windowH) {
				plugins.backToTop.hide();
			}
			plugins.backToTop.on('click', function () {
				$("html, body").animate({
					scrollTop: 0
				}, "slow");
				return false;
			});
		}

		// number counter
		if (plugins.counterBlock.length) {
			plugins.counterBlock.waypoint(function () {
				$('.number > span', plugins.counterBlock).each(count);
				this.destroy();
			}, {
				triggerOnce: true,
				offset: '80%'
			});
		}

		// CAROUSELS
		
		// testimonials carousel
		if (plugins.testimonialsCarousel.length) {
			plugins.testimonialsCarousel.slick({
				mobileFirst: false,
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
				autoplay: true,
				autoplaySpeed: 7000,
				arrows: true,
				dots: true,
				responsive: [{
					breakpoint: 767,
					settings: {
						slidesToShow: 1
					}
            }]
			});
		}

		// testimonials single carousel
		if (plugins.testimonialsSingleCarousel.length) {
			plugins.testimonialsSingleCarousel.slick({
				mobileFirst: false,
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
				autoplay: true,
				autoplaySpeed: 7000,
				arrows: true,
				dots: true
			});
		}

		// person carousel
		if (plugins.personCarousel.length) {
			plugins.personCarousel.slick({
				mobileFirst: false,
				slidesToShow: 4,
				slidesToScroll: 4,
				infinite: true,
				autoplay: true,
				autoplaySpeed: 10000,
				arrows: false,
				dots: true,
				responsive: [{
					breakpoint: 1199,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1
					}
            }, {
					breakpoint: 767,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
            }]
			});
		}

		// category carousel
		if (plugins.categoryCarousel.length) {
			plugins.categoryCarousel.slick({
				mobileFirst: false,
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
				autoplaySpeed: 7000,
				arrows: false,
				dots: true,
				responsive: [{
					breakpoint: 991,
					settings: {
						slidesToShow: 3
					}
            }, {
					breakpoint: 767,
					settings: {
						slidesToShow: 2
					}
            }, {
					breakpoint: 480,
					settings: {
						slidesToShow: 1
					}
            }]
			});
		}

		// post carousel
		if (plugins.postCarousel.length) {
			plugins.postCarousel.slick({
				mobileFirst: false,
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
				autoplay: false,
				arrows: true,
				dots: false
			});
		}

		// servicesCarousel carousel
		if (plugins.servicesCarousel.length) {
			plugins.servicesCarousel.slick({
				mobileFirst: false,
				slidesToShow: 4,
				slidesToScroll: 1,
				infinite: true,
				autoplay: true,
				autoplaySpeed: 7000,
				arrows: false,
				dots: true,
				responsive: [{
					breakpoint: 991,
					settings: {
						slidesToShow: 2
					}
            }, {
					breakpoint: 767,
					settings: {
						slidesToShow: 1
					}
            }]
			});
		}

		// END CAROUSELS

		// slide menu
		if (plugins.slideNav.length) {
			var $slideNav = plugins.slideNav,
				toggler = '.navbar-toggle',
				$pagewrapper = $('#page-content'),
				$navigationwrapper = $('.navbar-header'),
				$slidemenu = $('#slidemenu'),
				menuwidth = '100%',
				slidewidth = '270px',
				menuneg = '-100%',
				slideneg = '-270px';

			$slideNav.after($('<div id="navbar-height-col"></div>'));
			$slideNav.on("click", toggler, function (e) {
				var $this = $(this);
				var $heightCol = $('#navbar-height-col');
				var selected = $this.hasClass('slide-active');
				$slidemenu.stop().animate({
					left: selected ? menuneg : '0px'
				});
				$heightCol.stop().animate({
					left: selected ? slideneg : '0px'
				});
				$pagewrapper.stop().animate({
					left: selected ? '0px' : slidewidth
				});
				$navigationwrapper.stop().animate({
					left: selected ? '0px' : slidewidth
				});
				$this.toggleClass('slide-active', !selected);
				$slidemenu.toggleClass('slide-active');
				$pagewrapper.toggleClass('slide-active');
				$navigationwrapper.toggleClass('slide-active');
				$shiftMenu.toggleClass('slide-active');
			});
		}

		// post isotope
		if (plugins.postGallery.length) {
			var $postgallery = plugins.postGallery;
			$postgallery.imagesLoaded(function () {
				setPostSize();
			});
			$postgallery.isotope({
				itemSelector: '.blog-post',
				masonry: {
					gutter: 30,
					columnWidth: '.blog-post:not(.doubleW)'
				}
			});
		}

		// post more ajax load
		if (plugins.postMoreLink.length) {
			var $postMoreLink = plugins.postMoreLink,
				$postPreload = $('#postPreload'),
				$postLoader = $('#moreLoader');

			$postMoreLink.on('click', function () {
				var target = $(this).attr('data-load');
				$postLoader.addClass('visible');
				$(this).hide();
				$.ajax({
					url: target,
					success: function (data) {
						setTimeout(function () {
							$postPreload.append(data);
							$postLoader.removeClass('visible');
						}, 500);
					}
				});
			})
		}

		// testimonials more ajax load
		if (plugins.testimonialsMoreLink.length) {
			var $testimonialsMoreLink = plugins.testimonialsMoreLink,
				$testimonialsPreload = $('.testimonials-grid > .row'),
				$testimonialsLoader = $('#moreLoader');

			$testimonialsMoreLink.on('click', function () {
				var target = $(this).attr('data-load');
				$testimonialsLoader.addClass('visible');
				$(this).hide();
				$.ajax({
					url: target,
					success: function (data) {
						setTimeout(function () {
							$testimonialsPreload.append(data);
							$testimonialsLoader.removeClass('visible');
						}, 500);
					}
				});
			})
		}

		// contact page form
		if (plugins.contactForm.length) {
			var $contactform = plugins.contactForm;
			$contactform.validate({
				rules: {
					name: {
						required: true,
						minlength: 2
					},mobile: {
						required: true
					},
					comment: {
						required: true,
						minlength: 20
					},
					email: {
						required: true,
						email: true
					}

				},
				messages: {
					name: {
						required: "Please enter your name",
						minlength: "Your name must consist of at least 2 characters"
					},
					mobile: {
						required: "Please enter your mobile number"
					},
					comment: {
						required: "Please enter message",
						minlength: "Your message must consist of at least 20 characters"
					},
					email: {
						required: "Please enter your email",
						email:true
					}
				},
				submitHandler: function (form) {
					$(form).ajaxSubmit({
						type: "POST",
						data: $(form).serializeArray(),
						url: baseUrl+"eprayer/sendrequest",
						success: function () {
							$('#success').fadeIn();
							$('#contactform').each(function () {
								this.reset();
							});
						},
						error: function () {
							$('#contactform').fadeTo("slow", 0, function () {
								$('#error').fadeIn();
							});
						}
					});
				}
			});
		}

		// quote form
		if (plugins.quoteForm.length) {
			var $quoteForm = plugins.quoteForm;
			$quoteForm.validate({
				rules: {
					name: {
						required: true,
						minlength: 2
					},mobile: {
						required: true
					},
					comment: {
						required: true,
						minlength: 20
					},
					email: {
						required: true,
						email: true
					}

				},
				messages: {
					name: {
						required: "Please enter your name",
						minlength: "Your name must consist of at least 2 characters"
					},mobile: {
						required: "Please enter your phone number"
					},
					comment: {
						required: "Please enter message",
						minlength: "Your message must consist of at least 20 characters"
					},
					email: {
						required: "Please enter your email"
					}
				},
				submitHandler: function (form) {
					$(form).ajaxSubmit({
						type: "POST",
						data: $(form).serializeArray(),
						url: baseUrl+"eprayer/sendrequest",
						success: function () {
							$('#quoteSuccess').fadeIn();
							$('#quoteform').each(function () {
								this.reset();
							});
						},
						error: function () {
							$('#quoteError').fadeIn();
							$('#quoteform').each(function () {
								this.reset();
							});
						}
					});
				}
			});
		}

		if (windowWidth < 769) {
			startCarousel();
		} else {
			if (plugins.iconSquared.length) {
				equalHeight(".text-icon-squared", ".title", ".text");
			}
			if (plugins.testimonialsGrid.length) {
				equalHeight(".testimonials-grid .testimonials-item", ".title", ".text");
			}
		}

		toggleNavbarMethod(windowWidth);

		// Resize window events
		$window.resize(function () {
			var windowWidth = window.innerWidth || $window.width();
			if (windowWidth < 768) {
				startCarousel();
				$fullHeight.height('');
			}
			if (windowWidth > 767 && $navbarToggle.is(':hidden')) {
				$shiftMenu.removeClass('slide-active');
			}
			if (plugins.iconSquared.length) {
				$(".text-icon-squared, .text-icon-squared .title, .text-icon-squared .text").each(function () {
					$(this).css({
						'height': ''
					});
				})

			}
			if (plugins.testimonialsGrid.length) {
				$(".testimonials-grid .testimonials-item, .testimonials-grid .testimonials-item .title, .testimonials-grid .testimonials-item .text").each(function () {
					$(this).css({
						'height': ''
					});
				})
			}
		});

		$(window).resize(debouncer(function (e) {
			var windowWidth = window.innerWidth || $window.width();

			if (windowWidth > 767) {
				$fullHeight.height($(window).height());
				if (plugins.iconSquared.length) {
					equalHeight(".text-icon-squared", ".title", ".text");
				}
				if (plugins.testimonialsGrid.length) {
					equalHeight(".testimonials-grid .testimonials-item", ".title", ".text");
				}
			}
			if (plugins.postGallery.length) {
				setPostSize();
			}
			$dropdown.removeClass('opened');
			toggleNavbarMethod(windowWidth);
		}))

	})

	$window.on('load', function () {

		var windowWidth = window.innerWidth || $window.width();

		$('#loader-wrapper').fadeOut(500);

		// lazy loading effect
		if (plugins.animation.length) {
			onScrollInit(plugins.animation, windowWidth);
		}

		if (plugins.googleMapFooter.length) {
			createMap('footer-map', 17.445933, 78.394565)
		}

	});

	
	/* ---------------------------------------------
     Functions
    --------------------------------------------- */

	// Set equal height to block
	function equalHeight(block) {
		var wrapWidth = $(block).parent().width(),
			blockWidth = $(block).width(),
			wrapDivide = Math.floor(wrapWidth / blockWidth),
			cellArr = $(block);
		for (var arg = 1; arg <= arguments.length; arg++) {
			for (var i = 0; i <= cellArr.length; i = i + wrapDivide) {
				var maxHeight = 0,
					heightArr = [];
				for (var j = 0; j < wrapDivide; j++) {
					heightArr.push($(cellArr[i + j]).find(arguments[arg]));
					if (heightArr[j].outerHeight() > maxHeight) {
						maxHeight = heightArr[j].outerHeight();
					}
				}
				for (var counter = 0; counter < heightArr.length; counter++) {
					$(cellArr[i + counter]).find(arguments[arg]).outerHeight(maxHeight);
				}
			}
		}
	}
	
	// Slider Animation
	function doAnimations(elements) {
		var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		elements.each(function () {
			var $this = $(this);
			var $animationDelay = $this.data('delay');
			var $animationType = 'animated ' + $this.data('animation');
			$this.css({
				'animation-delay': $animationDelay,
				'-webkit-animation-delay': $animationDelay
			});
			$this.addClass($animationType).one(animationEndEvents, function () {
				$this.removeClass($animationType);
			});
		});
	}

	// Time Out Resize
	function debouncer(func, timeout) {
		var timeoutID, timeout = timeout || 500;
		return function () {
			var scope = this,
				args = arguments;
			clearTimeout(timeoutID);
			timeoutID = setTimeout(function () {
				func.apply(scope, Array.prototype.slice.call(args));
			}, timeout);
		}
	}

	// Count To
	function count(options) {
		var $this = $(this);
		options = $.extend({}, options || {}, $this.data('countToOptions') || {});
		$this.countTo(options);
	}

	// Set Post Size fo masonry
	function setPostSize() {
		var windowW = window.innerWidth || $window.width(),
			itemsInRow = 1;
		if (windowW > 1199) {
			itemsInRow = 3;
		} else if (windowW > 767) {
			itemsInRow = 3;
		} else if (windowW > 480) {
			itemsInRow = 1;
		}        
    var $postgallery = plugins.postGallery;
		var containerW = $postgallery.parent('.container').width() - 60,
			galleryW = containerW / itemsInRow;

		$postgallery.find('.blog-post').each(function () {
			if (windowW > 767) {
				if ($(this).hasClass('doubleW')) {
					$(this).css({
						width: galleryW * 2 + 30 + 'px',
					});
				} else {
					$(this).css({
						width: galleryW + 'px'
					});
				}
			} else {
				$(this).css({
					width: galleryW + 60 + 'px'
				});
			}
		});

		setTimeout(function () {
			$('.slick-initialized').slick('setPosition');
			$postgallery.isotope('layout');
		}, 100);
	}

	// Mobile Only carousel initialization
	function slickMobile(carousel) {
		carousel.slick({
			mobileFirst: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 7000,
			arrows: false,
			dots: true,
			slide: '.slide-item',
			responsive: [{
				breakpoint: 767,
				settings: "unslick",
            }]
		});
	}

	function startCarousel() {
		if (plugins.servicesCarousel2.length) {
			slickMobile(plugins.servicesCarousel2);
		}
	}
	
	// Navigation dropdown menu
	function toggleNavbarMethod(windowWidth) {
		var $dropdownLink = $(".dropdown > a, .dropdown-submenu > a");
		var $dropdown = $(".dropdown, .dropdown-submenu");
		var $dropdownCaret = $(".dropdown > a > .ecaret, .dropdown-submenu > a > .ecaret");
		$dropdownLink.on('click.toggleNavbarMethod', function (e) {
			e.preventDefault();
			e.stopPropagation();
			var url = $(this).attr('href');
			if (url) $(location).attr('href', url);
		});
		if (windowWidth < 768) {
			$dropdown.unbind('.toggleNavbarMethod');
			$dropdownCaret.unbind('.toggleNavbarMethod');
			$dropdownCaret.on('click.toggleNavbarMethod', function (e) {
				e.stopPropagation();
				e.preventDefault();
				var $li = $(this).parent().parent('li');
				if ($li.hasClass('opened')) {
					$li.find('.dropdown-menu').first().stop(true, true).slideUp(0);
					$li.removeClass('opened');
				} else {
					$li.find('.dropdown-menu').first().stop(true, true).slideDown(0);
					$li.addClass('opened');
				}
			})
		}
	}
	
	// Lazy Load animation
	function onScrollInit(items, wW) {
		if (wW > 991) {
			if (!$('body').data('firstInit')) {
				items.each(function () {
					var $element = $(this),
						animationClass = $element.attr('data-animation'),
						animationDelay = $element.attr('data-animation-delay');
					$element.removeClass('no-animate');
					$element.css({
						'-webkit-animation-delay': animationDelay,
						'-moz-animation-delay': animationDelay,
						'animation-delay': animationDelay
					});
					var trigger = $element;
					trigger.waypoint(function () {
						$element.addClass('animated').addClass(animationClass);
						if ($element.hasClass('hoveranimation')) {
							$element.on("webkitAnimationEnd mozAnimationEnd oAnimationEnd animationEnd", function () {
								$(this).removeClass("animated").removeClass("animation").removeClass(animationClass);
							});
						}
					}, {
						triggerOnce: true,
						offset: '90%'
					});
				});
				$('body').data('firstInit', true);
			}
		} else {
			items.each(function () {
				var $element = $(this);
				$element.addClass('no-animate')
			})
		}
	}
	
	// Google Map
	function createMap(id, mapZoom, lat, lng) {
		// Create google map
		// Basic options for a simple Google Map
		// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
		var mapOptions = {
			// How zoomed in you want the map to start at (always required)
			zoom: mapZoom,
			scrollwheel: false, // The latitude and longitude to center the map (always required)
			center: new google.maps.LatLng(lat, lng),
			// How you would like to style the map. 
			// This is where you would paste any style found on Snazzy Maps.
			styles: [{
				"featureType": "water",
				"elementType": "geometry",
				"stylers": [{
					"color": "#e9e9e9"
			}, {
					"lightness": 17
			}]
		}, {
				"featureType": "landscape",
				"elementType": "geometry",
				"stylers": [{
					"color": "#f5f5f5"
			}, {
					"lightness": 20
			}]
		}, {
				"featureType": "road.highway",
				"elementType": "geometry.fill",
				"stylers": [{
					"color": "#ffffff"
			}, {
					"lightness": 17
			}]
		}, {
				"featureType": "road.highway",
				"elementType": "geometry.stroke",
				"stylers": [{
					"color": "#ffffff"
			}, {
					"lightness": 29
			}, {
					"weight": 0.2
			}]
		}, {
				"featureType": "road.arterial",
				"elementType": "geometry",
				"stylers": [{
					"color": "#ffffff"
			}, {
					"lightness": 18
			}]
		}, {
				"featureType": "road.local",
				"elementType": "geometry",
				"stylers": [{
					"color": "#ffffff"
			}, {
					"lightness": 16
			}]
		}, {
				"featureType": "poi",
				"elementType": "geometry",
				"stylers": [{
					"color": "#f5f5f5"
			}, {
					"lightness": 21
			}]
		}, {
				"featureType": "poi.park",
				"elementType": "geometry",
				"stylers": [{
					"color": "#dedede"
			}, {
					"lightness": 21
			}]
		}, {
				"elementType": "labels.text.stroke",
				"stylers": [{
					"visibility": "on"
			}, {
					"color": "#ffffff"
			}, {
					"lightness": 16
			}]
		}, {
				"elementType": "labels.text.fill",
				"stylers": [{
					"saturation": 36
			}, {
					"color": "#333333"
			}, {
					"lightness": 40
			}]
		}, {
				"elementType": "labels.icon",
				"stylers": [{
					"visibility": "off"
			}]
		}, {
				"featureType": "transit",
				"elementType": "geometry",
				"stylers": [{
					"color": "#f2f2f2"
			}, {
					"lightness": 19
			}]
		}, {
				"featureType": "administrative",
				"elementType": "geometry.fill",
				"stylers": [{
					"color": "#fefefe"
			}, {
					"lightness": 20
			}]
		}, {
				"featureType": "administrative",
				"elementType": "geometry.stroke",
				"stylers": [{
					"color": "#fefefe"
			}, {
					"lightness": 17
			}, {
					"weight": 1.2
			}]
		}]
		};
		// Get the HTML DOM element that will contain your map 
		// We are using a div with id="map" seen below in the <body>
		var mapElement = document.getElementById(id);
		// Create the Google Map using our element and options defined above
		var map = new google.maps.Map(mapElement, mapOptions);
		var image = 'images/map-marker.png';
		// Let's also add a marker while we're at it
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(lat, lng),
			map: map,
			icon: image
		});
	}
	// END FUNCTIONS
	
	
})(jQuery);