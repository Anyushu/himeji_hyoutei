// sass
import "aos/dist/aos.css";
import "../sass/app.scss";

// js modules
import AOS from "aos";
import "bootstrap";
import "slick-carousel";
import "@fortawesome/fontawesome-free/js/all";

const IScroll = require("iscroll");
require("jquery-drawer");

AOS.init({
  offset: 0,
  delay: 100,
  duration: 1800,
  easing: "ease",
  once: true,
});

$(function ($) {
  // drawer
  $(".drawer").drawer();
  // ロードアニメーション
  let h = $(window).height();
  $("#loader").height(h).css("display", "block");
  $("#loader").delay(600).fadeOut(1000);
  $("#app").css("display", "block");

  // スムーススクロール
  $(".smooth").on("click", function () {
    var speed = 500;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
  });

  // scroll event
  $(window).on("load scroll", function () {
    let w = $(this).width();
    let scroll = $(this).scrollTop();
    if (w <= 768) {
      if (scroll >= 300) {
        $(".drawer-hamburger").addClass("on-scroll");
      } else {
        $(".drawer-hamburger").removeClass("on-scroll");
      }
    }
  });

  // slick
  $(".mv-slider").slick({
    dots: false,
    arrows: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    fade: true,
    speed: 1500,
    autoplay: true,
    autoplaySpeed: 4000,
    cssEase: 'linear',
  });
  $(".recruit-loop").slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: "linear",
    speed: 8000,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: "10vw",
    responsive: [
      {
        breakpoint: 991.98,
        settings: {
          slidesToShow: 2,
          speed: 5000,
        },
      },
    ],
  });

  $(".switch-img-thumbnail img").on("click", function () {
    let src = $(this).attr("src");
    $(".switch-img-main img").css('display', 'none');
    $(".switch-img-main img").attr("src", src);
    $(".switch-img-main img").fadeIn(800);
  });
  $(".play").on("click", function () {
    $(this).fadeOut();
    $(this).prev('img').fadeOut();
  });
});
