// sass
import '../sass/app.scss';

// js modules
import 'bootstrap';
import 'slick-carousel';

$(function ($) {
  // スムーススクロール
  $('.smooth').on('click', function () {
    var speed = 500;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
  });

  // slick
  $('.mv-slider').slick({
    dots: false,
    arrows: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 4000,
    responsive: [{
      breakpoint: 991.98,
      settings: {
        // slidesToShow: 1,
      }
    }]
  });
});