(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Header and testi carousel
    $(".header-carousel").slick({
        autoplay: true,
        smartSpeed: 500,
        items: 1,
        dots: false,
        prevArrow: false,
        nextArrow: false,
        loop: true
    });

    $('.testimonial-carousel').slick({
        autoplay: true,
        smartSpeed: 500,
        slidesToShow: 1,
        dots: true,
        loop: true
    });

    $('.berita-carousel').slick({
        autoplay: true,
        smartSpeed: 500,
        slidesToShow: 1,
        center: true,
        dots: true,
        loop: true,
        prevArrow: false,
        nextArrow: false,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            }
        }
      });


    // Modal Video
    var $videoSrc;
    $('.btn-play').click(function () {
        $videoSrc = $(this).data("src");
    });
    $('#videoModal').on('shown.bs.modal', function (e) {
        $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    })
    $('#videoModal').on('hide.bs.modal', function (e) {
        $("#video").attr('src', $videoSrc);
    })


})(jQuery);

