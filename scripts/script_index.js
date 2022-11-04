const swiper = new Swiper('.main-swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    slidesPerView: '1',

    freeMode: false,

    speed: 3000,

    autoplay: {
        delay: 2000,
        pauseOnMouseEnter: true,
    },
    grabCursor: true,
    mousewheelControl: true,
    keyboardControl: true,
    breakpoints: {
        // when window width is >= 320px
        // when window width is >= 480px
        700: {
            slidesPerView: 2,
        },
        // when window width is >= 640px
        1080: {
            slidesPerView: 3,
        },
    }
});