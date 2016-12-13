/*--------------------------------------------------------------
 Custom js
 --------------------------------------------------------------*/

jQuery( document ).ready( function( $ ) {
    'use strict';
    // Vertical Menu Toggle
    $('.saturnthemes-toggle .saturnthemes-toggle-btn').on('click', function () {
        $('.saturnthemes-toggle').toggleClass('open');
    });

    // Tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Search in menu
    var $search_btn = $( '.header-search > i' ),
        $search_form = $( '.header-search .search-form' );

    $search_btn.on( 'click', function() {
        $search_form.toggleClass( 'open' );
    } );

    // Scroll Animation
    var wow = new WOW({
        boxClass:     'wow-animation',
        animateClass: 'animated',
        offset:       0,
        mobile:       true,
        live:         true
    });
    wow.init();

    // Mobile Menu
    $('.mobile-menu .mobile-menu-toggle').on('click', function () {
        $(this).parent('.menu-item').toggleClass('open');

        return false;
    });
    $( ".mobile-search" ).on( "click", function() {
        $( "#search-mobile-toggle" ).toggle(200);
    });

    // Search
    var $searchContainer = $( '.full-screen-search-container ');
    $( '#js-search-overlay' ).on( 'click', function ( evt ) {
        evt.preventDefault();

        $searchContainer.addClass( 'open' );
        $searchContainer.find('.search-field')[0].focus();
    } );
    $searchContainer.on('click', function (evt) {
        if (!$(evt.target).parents('.search-form').length) {
            evt.preventDefault();

            $searchContainer.removeClass( 'open' );
        }
    });

    // Fitvids
    $( ".container" ).fitVids();

    // Post Gallery
    $( ".post-gallery" ).slick({
        dots: false,
        infinite: true,
        arrows: true,
        prevArrow: '<i class="fa fa-angle-left slick-arrow-prev"></i>',
        nextArrow: '<i class="fa fa-angle-right slick-arrow-next"></i>',
        speed: 500,
        adaptiveHeight: true
    });

    // Counter
    if ($.fn.waypoint) {
        $('.counter-container').waypoint(function () {
            var $this = $(this);

            if ($this.data('waypoint-run')) {
                return;
            }

            var $counter = $(this).find('.counter'),
                value = $counter.data('value'),
                decimalCount = value.toString().split('.'),
                duration = $counter.data('speed'),
                separator = $counter.data('separator'),
                decimalPoint = $counter.data('decimal');

            if (decimalCount[1]){
                decimalCount = decimalCount[1].length - 1;
            } else {
                decimalCount = 0;
            }

            var counter = new CountUp($counter.attr('id'), 0, value, decimalCount, duration, {
                separator : separator,
                decimal : decimalPoint
            });

            counter.start();

            $this.data('waypoint-run', true);
        }, { offset: '85%' });
    }

    // Testimonial
    $('.testimonial-container').each(function () {
        var $testimonialContainer = $(this);

        $testimonialContainer.find('.testimonial-list').slick({
            mobileFirst: true,
            fade: ($testimonialContainer.data('items') == 1) ? true : false,
            dots: $testimonialContainer.data('dots') ? true : false,
            arrows: $testimonialContainer.data('nav') ? true : false,
            prevArrow: '<i class="fa fa-angle-left slick-arrow-prev"></i>',
            nextArrow: '<i class="fa fa-angle-right slick-arrow-next"></i>',
            autoplay: $testimonialContainer.data('autoplay') ? true : false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: $testimonialContainer.data('items'),
                        slidesToScroll: $testimonialContainer.data('items'),
                    }
                },
                {
                    breakpoint: 766,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 481,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
    });

    // Promo Popup
    if (saturnthemes_industry_params.promo_popup_show == 1) {
        var cookieKey = 'promo_popup_hide',
            hidePopupRegex = new RegExp(cookieKey + '=1');

        if (!hidePopupRegex.test(document.cookie)) {
            $.magnificPopup.open({
                items: {
                    src: '#promo-popup',
                    type: 'inline'
                },
                removalDelay: 300
            });
        }

        $('#promo-popup-checkbox').on('click', function () {
            if ($(this).prop('checked')) {
                document.cookie = cookieKey + '=1;expires=1;path=/';
            } else {
                document.cookie = cookieKey + '=0;expires=1;path=/';
            }
        });
    }

    var $window = $( window );
    // Scroll up
    var $scrollup = $( '.scrollup' );

    $window.scroll( function () {
        if ( $window.scrollTop() > 2500 ) {
            $scrollup.addClass( 'show' );
        } else {
            $scrollup.removeClass( 'show' );
        }
    } );

    $scrollup.on( 'click', function ( evt ) {
        $( "html, body" ).animate( { scrollTop: 0 }, 600 );
        evt.preventDefault();
    } );

    var $quantityContainer = $('.quantity-container');
    if ($quantityContainer.length) {
        $quantityContainer.find('.quantity-up, .quantity-down').on('click', function () {
            var $input = $quantityContainer.find('input'),
                step = $input.data('step'),
                min = $input.data('min') || 1,
                max = $input.data('max'),
                value = parseInt($input.val());

            if ($(this).is('.quantity-up') && (!max || max >= value + step)) {
                value += step;
            } else if ($(this).is('.quantity-down') && (min <= value - step)) {
                value -= step;
            }

            $input.val(value);

            return false;
        });
    }
} );