// sass
import 'aos/dist/aos.css';
import '../sass/app.scss';

// js modules
import AOS from 'aos';
import 'bootstrap';
import 'slick-carousel';
import '@fortawesome/fontawesome-free/js/all';

const IScroll = require('iscroll');
require('jquery-drawer');

AOS.init({
  offset: 0,
  delay: 100,
  duration: 800,
  easing: 'ease',
});

$(function ($) {
  $('.drawer').drawer();
  // ロードアニメーション
  let h = $(window).height();
  $('#loader').height(h).css('display', 'block');
  $('#loader').delay(600).fadeOut(1000);
  $('#app').css('display', 'block');

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