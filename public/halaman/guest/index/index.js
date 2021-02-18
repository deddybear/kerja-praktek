$(document).ready(function () {
    $('.owl-carousel').owlCarousel({

        responsive:{
            0:{
                loop: true,
				items: 1,
				stagePadding: 25,
				dots: false,
				autoplay: true,
				autoplayTimeout: 4e3,
				autoplayHoverPause: true
            },
            600:{
                loop: true,
				items: 2,
				stagePadding: 25,
				dots: false,
				autoplay: true,
				autoplayTimeout: 4e3,
				autoplayHoverPause: true
            },
            1000:{
                loop: true,
				items: 3,
				stagePadding: 25,
				dots: false,
                autoplay: true,
				autoplayTimeout: 4e3,
				autoplayHoverPause: true
            }
        }
    });

});
