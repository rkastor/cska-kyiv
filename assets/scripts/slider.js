
    var newsThumbs = new Swiper('.news-slider__thumb', {
        speed: 1500,
        // loop: true,
        loopFillGroupWithBlank: true,
        slidesPerView: 4,
        observer: true
        // effect: 'fade'
    });
    var newsPreview = new Swiper('.news-slider__preview', {
        speed: 1500,
        loop: true,
        loopFillGroupWithBlank: true,
        slidesPerView: 1,
        autoplay: {
            delay: 2000
        },
        observer: true,
        // effect: 'fade'
        thumbs: {
            swiper: newsThumbs
        }
    });