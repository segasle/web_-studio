$(document).ready(function () {
    let slider = document.querySelector('.swiper-container');
// let mySwiper = new Swiper(slider, {
// 	slidesPerView: 3,
// 	spaceBetween: 10,
// 	loop: true,
// 	pagination: {
// 		el: '.swiper-pagination',
// 		clickable: true,
// 	},

// })

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