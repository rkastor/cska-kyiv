// initialize slider

var newsThumbs = new Swiper('.news-slider__thumb', {
    speed: 800,
    slidesPerView: 4,
    spaceBetween: 20,
    // loop: true,
    // pagination: {
    //     el: '.swiper-pagination',
    //     clickable: true,
    // },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    // freeMode: true,
    // watchSlidesVisibility: true,
    // watchSlidesProgress: true,
    breakpoints: {

        1024: {
            spaceBetween: 10,
        },
        680: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        576: {
            slidesPerView: 1,
            spaceBetween: 10,
        }
    }
});

var newsPreview = new Swiper('.news-slider__preview', {
    speed: 800,
    slidesPerView: 1,
    spaceBetween: 50,
    loop: true,
    autoplay: {
        delay: 4000,
    },
    pagination: {
        el: '.swiper-pagination',
        // type: 'fraction',
        // dynamicBullets: true,
    },
    thumbs: {
        swiper: newsThumbs
    },
    // effect: 'fade',
});

// $('.swiper-slide-duplicate').remove();