$(document).ready(function () {
    const slider = document.querySelector('.swiper-container');
    let mySwiper;

    function mobileSlider() {
        if (window.innerWidth <= 992 && slider.dataset.mobile == 'false') {
            mySwiper = new Swiper(slider, {
                slidesPerView: 1,
                spaceBetween: 10,
                // loop: true,
                slideClass: 'swiper-slide',
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                    type: 'fraction',
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30,

                    }
                }
            });

            slider.dataset.mobile = 'true';
        }

        if (window.innerWidth > 992) {
            slider.dataset.mobile = 'false';
            if (slider.classList.contains('swiper-container-initialized')) {
                mySwiper.destroy();
            }
        }
    }

    mobileSlider();


    window.addEventListener('resize', () => {
        mobileSlider();
    });

});
// $(document).ready(function () {
// //    сщтые ыцшзукЫскщдд = вщсгьутеюйгукнЫудусещк(эюыцшзук-ыскщддэ)ж
//
//     const swiperScroll = new Swiper('.swiper-scroll', {
//         wrapperClass: 'scroll-wrapper',
//         slideClass: 'scroll-container',
//         direction: 'vertical',
//
//         pagination: {
//             el: '.swiper-pagination',
//             clickable: true,
//         },
//     });
// });