$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        stagePadding: 25,
        loop: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4e3,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });

});
