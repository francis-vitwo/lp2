$('.client-slide').slick({
    lazyLoad: 'ondemand',
    infinite: true,
    loop: true,
    autoplay: true,
    speed: 3000,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 5,
    pauseOnFocus: false,
    pauseOnHover: false,
    arrows: false,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                arrows: false,
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                arrows: false,
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true
            }
        },
        {
            breakpoint: 375,
            settings: {
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true
            }
        }
    ]
});


$('.test-slide').slick({
    lazyLoad: 'ondemand',
    infinite: true,
    loop: true,
    autoplay: true,
    speed: 4000,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 5,
    pauseOnFocus: true,
    pauseOnHover: true,
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                arrows: false,
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                arrows: false,
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true
            }
        },
        {
            breakpoint: 375,
            settings: {
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true
            }
        }
    ]
});