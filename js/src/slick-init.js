import $ from "jquery";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import "slick-carousel";

export function initSlickCarousels() {
  /* Slicks */
  $(".slick0").slick({
    dots: false,
    slidesToShow: 3,
    navigation: {
      nextEl: ".swiper-button-next-0",
      prevEl: ".swiper-button-prev-0",
    },
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 680,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $(".slick1").slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 30000000,
    navigation: {
      nextEl: ".swiper-button-next-1",
      prevEl: ".swiper-button-prev-1",
    },
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 680,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  $(".slickGallery").slick({
    dots: false,
    infinite: true,
    speed: 700,
    slidesToShow: 3,
    autoplay: true,
    autoplaySpeed: 5000,
    fade: false,
    navigation: {
      nextEl: ".swiper-button-next-1",
      prevEl: ".swiper-button-prev-1",
    },
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 680,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
    ]
  });

  $(".slickEvents").slick({
    dots: false,
    infinite: true,
    speed: 700,
    slidesToShow: 3,
    autoplay: true,
    autoplaySpeed: 5000,
    fade: false,
    navigation: {
      nextEl: ".swiper-button-next-1",
      prevEl: ".swiper-button-prev-1",
    },
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 680,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
    ]
  });

  function initSlick() {
    $(".slickPlace").each(function () {
      var $slickElement = $(this);
      var slickOptions = {
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: false,
        infinite: true,
        speed: 500,
        fade: false,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
              navigation: {
                nextEl: ".swiper-button-next-2",
                prevEl: ".swiper-button-prev-2",
              },
            },
          },
        ],
      };

      if ($(window).width() < 1024) {
        if (!$slickElement.hasClass("slick-initialized")) {
          $slickElement.slick(slickOptions);
        }
      } else {
        if ($slickElement.hasClass("slick-initialized")) {
          $slickElement.slick("unslick");
        }
      }
    });
  }

  $(window).on("load resize", initSlick);
}
