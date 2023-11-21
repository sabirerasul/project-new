/****************************************************************************************
||||||||||||||||||||||||||||     TABLE OF CONTENT  for JS    ||||||||||||||||||
*****************************************************************************************
* 1. Search box open
* 2. Scroll page
* 3. Animate the scroll to top
* 4. Video Popup
* 5. Slider operator
* 6. Mobile menu dropdown
* 7. Nice Select
* 8. Progressbar animation 

******************************************************************************/
(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {

        $(window).on('scroll', function () {
            var scroll = $(window).scrollTop();
            if (scroll < 100) {
                $(".header-middle").removeClass("scroll-header")
            } else {
                $(".header-middle").addClass("scroll-header");
            }
        });

        /*
        * 1. Search Box Open
        */
        $('.ccdda, .ssdf').click(function () {

            $('.searchh').toggleClass('activee');
            $('.ccdda').toggleClass('toggle');
        });

        /*
        * 2. Scroll page
        */
        $(window).scroll(function () {
            if ($(this).scrollTop() > 200) {
                $('.go-top').fadeIn(200);
            } else {
                $('.go-top').fadeOut(200);
            }
        });

        /*
        * 3. Animate the scroll to top
        */
        $('.go-top').click(function (event) {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: 0
            }, 800);
        })

        /*
        * 4. Video Popup
        */
        $('.video-popup').magnificPopup({
            type: 'iframe',
            iframe: {
                markup: '<div class="mfp-iframe-scaler">' +
                    '<div class="mfp-close"></div>' +
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                    '</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button

                patterns: {
                    youtube: {
                        index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

                        id: 'v=', // String that splits URL in a two parts, second part should be %id%
                        // Or null - full URL will be returned
                        // Or a function that should return %id%, for example:
                        // id: function(url) { return 'parsed id'; }

                        src: 'https://www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe.
                    },
                    vimeo: {
                        index: 'vimeo.com/',
                        id: '/',
                        src: '//player.vimeo.com/video/%id%?autoplay=1'
                    },
                    gmaps: {
                        index: '//maps.google.',
                        src: '%id%&output=embed'
                    }

                    // you may add here more sources

                },

                srcAction: 'iframe_src', // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".
            }
        });

        /*
        * 5. Slider operator
        */
        $(".brand-active").owlCarousel({
            items: 4,
            nav: false,
            dot: false,
            navText: ['<i class="fal fa-angle-left"></i>', '<i class="fal fa-angle-right"></i>'],
            loop: true,
            margin: 20,
            autoplay: false,
            autoplayTimeout: 3000,
            smartSpeed: 3000,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,

                },
                768: {
                    items: 3,

                },
                1000: {
                    items: 4,

                }
            }


        });

        // $(".single-slider-active").owlCarousel({
        //     items: 1,
        //     nav: false,
        //     dot: false,
        //     loop: true,
        //     center: true,
        //     margin: 20,
        //     autoplay: true,
        //     autoplayTimeout: 3000,
        //     smartSpeed: 3000,
        //     responsiveClass: true,
        //     responsive: {
        //         0: {
        //             items: 1,

        //         },
        //         481: {
        //             items: 1,

        //         },
        //         1000: {
        //             items: 3,

        //         }
        //     }
        // });


        $(".view-slider").owlCarousel({
            items: 5,
            nav: true,
            dot: false,
            loop: true,
            margin: 20,
            autoplay: false,
            autoplayTimeout: 3000,
            smartSpeed: 3000,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,

                },
                768: {
                    items: 3,

                },
                1000: {
                    items: 4,

                }
            }
        });

        $(".happy-slider").owlCarousel({
            items: 1,
            nav: false,
            dot: false,
            navText: ['<i class="fal fa-angle-left"></i>', '<i class="fal fa-angle-right"></i>'],
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 3000,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 0,

                },
                768: {
                    items: 2,
                    stagePadding: 0,

                },
                1000: {
                    items: 3,
                    stagePadding: 100,
                    stagePadding: 0,

                },
                1740: {
                    items: 3,
                    stagePadding: 0,

                },
            }

        });

        $(".single-slider-active").owlCarousel({
            items: 3,
            nav: false,
            dot: false,
            navText: ['<i class="fal fa-angle-left"></i>', '<i class="fal fa-angle-right"></i>'],
            loop: true,
            margin: 20,
            autoplay: true,
            center: true,
            autoplayTimeout: 2000,
            smartSpeed: 3000,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,

                    stagePadding: 0,

                },
                768: {
                    items: 2,
                    center: false,

                },
                1000: {
                    items: 3,

                    stagePadding: 0,

                }
            }
        });

    });

    /*
    * 6. Mobile menu dropdown
    */
    jQuery('ul i').on('click', function () {
        jQuery(this).toggleClass('DDopen');
        jQuery(this).closest('ul').find('ul').removeClass('opened');
        jQuery(this).parent().find('> ul').addClass('opened');
        jQuery(this).closest('ul').find('ul').not('.opened').slideUp(350);
        jQuery(this).parent().find('> ul').slideToggle(350);
        jQuery(this).closest('ul').find('i').not(this).removeClass('DDopen');
    });


    if ($('#datepicker').is(':visible')) {
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    }

    /*
    * 7. Nice Select
    */
    if ($('.shop-qty').is(':visible')) {
        $('select').niceSelect();
    }
    if ($('form').is(':visible')) {
        $('select').niceSelect();
    }

    /*
    * 8. Progressbar animation 
    */
    $("#web-designprogressbar").circleProgress({
        value: 1.00,
        size: 150,
        fill: '#ddd2d6'
    })
        .on('circle-animation-progress', function (event, progress) {
            // $(this).find('.progressbar-percentage').html(Math.round(100 * progress) + '<i>%</i>');
            $(this).find('.progressbar-percentage').html('<img src="./assets/img/quick-recovery.webp">');
            return false;

        });
    $("#Happy-designprogressbar").circleProgress({
        value: 1.00,
        size: 150,
        fill: '#ddd2d6'
    })
        .on('circle-animation-progress', function (event, progress) {
            // $(this).find('.progressbar-percentage').html(Math.round(100 * progress) + '<i>%</i>');
            $(this).find('.progressbar-percentage').html('<img src="./assets/img/personalize-care.webp">');

        });
    $("#Quick-designprogressbar").circleProgress({
        value: 1.00,
        size: 150,
        fill: '#ddd2d6'
    })
        .on('circle-animation-progress', function (event, progress) {
            // $(this).find('.progressbar-percentage').html(Math.round(100 * progress) + '<i>%</i>');
            $(this).find('.progressbar-percentage').html('<img src="./assets/img/experienced-team.webp">');

        });
    $("#Experience-designprogressbar").circleProgress({
        value: 1.00,
        size: 150,
        fill: '#ddd2d6'
    })
        .on('circle-animation-progress', function (event, progress) {
            // $(this).find('.progressbar-percentage').html(Math.round(100 * progress) + '<i>%</i>');
            $(this).find('.progressbar-percentage').html('<img src="./assets/img/experience.webp">');

        });

}(jQuery));