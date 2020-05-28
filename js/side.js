
$(document).ready(function () {
    $('.responsive').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        adaptiveHeight: true,

        // lazyLoad: 'ondemand',
        // slidesPerRow: 3,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    rows: 1,

                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    rows: 1,
                    slidesToScroll: 1,
                }
            }
        ],
        // rows: 2,

    });
    $('.slick').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: true,
        arrow: false,
        infinite: false,
        vertical: true,
        centerMode: true,

        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    arrow: true,
                    vertical: false,
                    centerMode: false,

                }
            }
        ],
    });
    $('.comments-slide').slick({
        // prevArrow: 'fas fa-angle-left',
        // nextArrow: '.fas .fa-angle-right',
        // slidesToShow: 2,
        // slidesToScroll: 1,
        // dots: true,
        autoplay: true,
        // speed: 5000,
        // arrow: false,
        // infinite: false,
        // vertical: true,
        // centerMode: true,
        //
        // responsive: [
        //     {
        //         breakpoint: 767,
        //         settings: {
        //             slidesToShow: 1,
        //             arrow: true,
        //             vertical: false,
        //             centerMode: false,
        //
        //         }
        //     }
        // ],
    });
});
