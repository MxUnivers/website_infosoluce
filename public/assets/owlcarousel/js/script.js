function company_carouselInit() {
    $('.owl-carousel.carousel_slider').owlCarousel({
        dots: false,
        loop: true,
        margin: 30,
        stagePadding: 2,
        autoplay: true,
        smartSpeed: 1000,
        autoplayTimeout: 1500,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2,
            },
            992: {
                items: 4
            }
        }
    });
}
company_carouselInit();