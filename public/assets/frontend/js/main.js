/**
*
* -----------------------------------------------------------------------------
*
* Author : Digimerlin
* Author URI : http://digimerlin.com/
*
* -----------------------------------------------------------------------------
*
**/
(function($) {
	"use strict";
    // sticky menu
    var win = $(window);

    // ===== 01. Main Menu
	function mianMenu() {
		// Variables
		var var_window = $(window),
			navContainer = $('.nav-container'),
			pushedWrap = $('.nav-pushed-item'),
			pushItem = $('.nav-push-item'),
			pushedHtml = pushItem.html(),
			pushBlank = '',
			navbarToggler = $('.navbar-toggler'),
			navMenu = $('.nav-menu'),
			navMenuLi = $('.nav-menu ul li'),
			closeIcon = $('.navbar-close');

		// navbar toggler
		navbarToggler.on('click', function () {
			navbarToggler.toggleClass('active');
			navMenu.toggleClass('menu-on');
		});

		// close icon
		closeIcon.on('click', function () {
			navMenu.removeClass('menu-on');
			navbarToggler.removeClass('active');
		});

		// adds toggle button to li items that have children
		navMenu.find('li a').each(function () {
			if ($(this).next().length > 0) {
				$(this)
					.parent('li')
					.append(
						'<span class="dd-trigger"><i class="fal fa-angle-down"></i></span>'
					);
			}
		});

		// expands the dropdown menu on each click
		navMenu.find('li .dd-trigger').on('click', function (e) {
			e.preventDefault();
			$(this)
				.parent('li')
				.children('ul')
				.stop(true, true)
				.slideToggle(350);
			$(this).parent('li').toggleClass('active');
		});

		// check browser width in real-time
		function breakpointCheck() {
			var windoWidth = window.innerWidth;
			if (windoWidth <= 991) {
				navContainer.addClass('breakpoint-on');
			} else {
				navContainer.removeClass('breakpoint-on');
			}

			if (windoWidth <= 767) {
				pushedWrap.html(pushedHtml);
				pushItem.hide();
			} else {
				pushedWrap.html(pushBlank);
				pushItem.show();
			}
		}

		breakpointCheck();
		var_window.on('resize', function () {
			breakpointCheck();
		});
	}

// ===== 02. OffCanvasMenu
	function offcanvasMenu() {
		// Set Click Function For open
		$('.offcanvas-toggler').on('click', function (e) {
			e.preventDefault();
			$('.offcanvas-wrapper').addClass('show-offcanvas');
			$('.offcanvas-overly').addClass('show-overly');
		});
		// Set Click Function For Close
		$('.offcanvas-close').on('click', function (e) {
			e.preventDefault();
			$('.offcanvas-overly').removeClass('show-overly');
			$('.offcanvas-wrapper').removeClass('show-offcanvas');
		});
		// Set Click Function on Overly For open on
		$('.offcanvas-overly').on('click', function (e) {
			$(this).removeClass('show-overly');
			$('.offcanvas-wrapper').removeClass('show-offcanvas');
		});
	}

// ===== 20. Sticky Header
	function stickyHeader() {
		var sticky = $('header.sticky-header');
		var scrollFromtop = $(window).scrollTop();
		var scrollLimit = $('header').height() + 10;

		if (scrollFromtop < scrollLimit) {
			sticky.removeClass('sticky-on');
		} else {
			sticky.addClass('sticky-on');
		}
	}

	
    //window load
//    $(window).on( 'load', function() {
//         $("#loading").delay(1500).fadeOut(500);
//         $("#loading-center").on( 'click', function() {
//         $("#loading").fadeOut(500);
//         })
//     })

   //Testimonials Slider
    var sliderfor = $('.slider-for');
    if(sliderfor.length){
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav',
             autoplay: true
        });
    }
    var slidernav = $('.slider-nav');
    if(slidernav.length){
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
        });
    }

    // video 
    if ($('.player').length) {
        $(".player").YTPlayer();
    }

    // wow init
    new WOW().init();
    
    // magnificPopup init
    var imagepopup = $('.image-popup');
    if(imagepopup.length){
        $('.image-popup').magnificPopup({
            type: 'image',
            callbacks: {
                beforeOpen: function() {
                   this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure animated zoomInDown');
                }
            },
            gallery: {
                enabled: true
            }
        });
    }

    // Get a quote popup
    var popupquote = $('.popup-quote');
    if(popupquote.length){
        $('.popup-quote').magnificPopup({
            type: 'inline',
            preloader: false,
            focus: '#qname',
            removalDelay: 500,
            callbacks: {
                beforeOpen: function() {
                    this.st.mainClass = this.st.el.attr('data-effect');
                    if(win.width() < 800) {
                        this.st.focus = false;
                    } else {
                        this.st.focus = '#qname';
                    }
                }
            }
        });
    }
    
    //preloader
    $(window).on('load', function() {
        $("#loader").delay(1000).fadeOut(500);
    })

    //Videos popup jQuery 
    var popupvideos = $('.popup-videos');
    if(popupvideos.length){
        $('.popup-videos').magnificPopup({
            disableOn: 10,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        }); 
    }
    /*-------------------------------------
        OwlCarousel
    -------------------------------------*/
    $('.rs-carousel').each(function() {
        var owlCarousel = $(this),
        loop = owlCarousel.data('loop'),
        items = owlCarousel.data('items'),
        margin = owlCarousel.data('margin'),
        stagePadding = owlCarousel.data('stage-padding'),
        autoplay = owlCarousel.data('autoplay'),
        autoplayTimeout = owlCarousel.data('autoplay-timeout'),
        smartSpeed = owlCarousel.data('smart-speed'),
        dots = owlCarousel.data('dots'),
        nav = owlCarousel.data('nav'),
        navSpeed = owlCarousel.data('nav-speed'),
        xsDevice = owlCarousel.data('mobile-device'),
        xsDeviceNav = owlCarousel.data('mobile-device-nav'),
        xsDeviceDots = owlCarousel.data('mobile-device-dots'),
        smDevice = owlCarousel.data('ipad-device'),
        smDeviceNav = owlCarousel.data('ipad-device-nav'),
        smDeviceDots = owlCarousel.data('ipad-device-dots'),
        smDevice2 = owlCarousel.data('ipad-device2'),
        smDeviceNav2 = owlCarousel.data('ipad-device-nav2'),
        smDeviceDots2 = owlCarousel.data('ipad-device-dots2'),
        mdDevice = owlCarousel.data('md-device'),
        centerMode = owlCarousel.data('center-mode'),
        HoverPause = owlCarousel.data('hoverpause'),
        mdDeviceNav = owlCarousel.data('md-device-nav'),
        mdDeviceDots = owlCarousel.data('md-device-dots');
        owlCarousel.owlCarousel({
            loop: (loop ? true : false),
            items: (items ? items : 4),
            lazyLoad: true,
            center: (centerMode ? true : false),
            autoplayHoverPause: (HoverPause ? true : false),
            margin: (margin ? margin : 0),
            //stagePadding: (stagePadding ? stagePadding : 0),
            autoplay: (autoplay ? true : false),
            autoplayTimeout: (autoplayTimeout ? autoplayTimeout : 1000),
            smartSpeed: (smartSpeed ? smartSpeed : 250),
            dots: (dots ? true : false),
            nav: (nav ? true : false),
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            navSpeed: (navSpeed ? true : false),
            responsiveClass: true,
            responsive: {
                0: {
                    items: (xsDevice ? xsDevice : 1),
                    nav: (xsDeviceNav ? true : false),
                    dots: (xsDeviceDots ? true : false),
                    center: false,
                },
                768: {
                    items: (smDevice2 ? smDevice2 : 2),
                    nav: (smDeviceNav2 ? true : false),
                    dots: (smDeviceDots2 ? true : false),
                    center: false,
                },
                992: {
                    items: (smDevice ? smDevice : 3),
                    nav: (smDeviceNav ? true : false),
                    dots: (smDeviceDots ? true : false),
                    center: false,
                },
                1200: {
                    items: (mdDevice ? mdDevice : 4),
                    nav: (mdDeviceNav ? true : false),
                    dots: (mdDeviceDots ? true : false),
                }
            }
        });
    });

    // Skill bar 
    var skillbar = $('.skillbar');
    if(skillbar.length) {
        $('.skillbar').skillBars({  
            from: 0,    
            speed: 4000,    
            interval: 100,  
            decimals: 0,    
        });
    }
		
    // Counter Up
    var counter = $('.rs-count');
    if(counter.length) {  
        $('.rs-count').counterUp({
            delay: 20,
            time: 1500
        });
    }
    
    // scrollTop init	
    var totop = $('#scrollUp');    
    win.on('scroll', function() {
        if (win.scrollTop() > 150) {
            totop.fadeIn();
        } else {
            totop.fadeOut();
        }
    });
    totop.on('click', function() {
        $("html,body").animate({
            scrollTop: 0
        }, 0)
    });

    /*---------------------
	=== DOCUMENT READY  ===
	----------------------*/
	$(document).ready(function () {
		mianMenu()
		offcanvasMenu()
	});

	/*--------------------
	=== WINDOW SCROLL  ===
	----------------------*/
	$(window).on('scroll', function () {
		stickyHeader()
	});
    
})(jQuery);