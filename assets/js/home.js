(function(){
    "use strict";


    initSlickCarousel();
    
    function initSlickCarousel() {
        $('.studentsSaySlider').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            dotsClass: 'dotsList dotsListii d-flex align-items-center justify-content-center list-unstyled mb-0 mt-4 mt-lg-8',
            autoplay: true,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: true
                    }
                }
            ]
        });
    
        $('.ourCategorySlider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            dotsClass: 'dotsList dotsListii d-flex align-items-center justify-content-center list-unstyled mb-0 mt-4 mt-lg-8',
            autoplay: true,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        autoplay: true
                    }
                },{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        autoplay: true
                    }
                }
            ]
        });

        $('.carruselRequisitos').slick({
            dots: true,
          infinite: false,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll:  3,
          responsive: [
            {
              breakpoint: 1064,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 780,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ],
          arrows: false
          });

          $('.carroselObtener').slick({
            dots: true,
            infinite: true,
            slidesToScroll: 1,
            slidesToShow: 1,
            adaptiveHeight: true
          });
    }
}());