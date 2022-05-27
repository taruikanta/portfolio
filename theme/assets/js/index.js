$(function () {
  const $body = $("body");
  const $headerWrap = $(".header-wrap");
  const $navigation = $headerWrap.find(".navigation");
  const $navList = $navigation.find(".nav-list");
  const $toggle = $headerWrap.find(".nav-toggle");
  const $border = $toggle.find(".nav-border");
  const $open = $navigation.find(".js-visible");
  const $logo = $headerWrap.find(".logo");
  const $blank = $(".is-blank");

  function slider() {
    const $area = $(".slider-area");
    const $list = $area.find(".slider");
    const $item = $list.find(".slider-item");
    let slideCurrent = 0;
    let lastCurrent = $item.length - 1;
    $item.css("display", "none");
    $item.eq(slideCurrent).css("display", "block");
    const $fadeSpeed = 1500;
    const $duration = 3000;

    function changeSlide() {
      $item.fadeOut($fadeSpeed);
      $item.eq(slideCurrent).fadeIn($fadeSpeed);
    }

    function startTimer() {
      timer = setInterval(nextSlide, $duration);
    }

    function nextSlide() {
      if (slideCurrent === lastCurrent) {
        slideCurrent = 0;
        changeSlide();
      } else {
        slideCurrent++;
        changeSlide();
      }
    }

    startTimer();
  }

  function hamburger() {
    $body.toggleClass("is-fixed");
    $border.toggleClass("is-active");
    $logo.toggleClass("is-active");
    $headerWrap.toggleClass("is-active");
    $blank.toggleClass("is-blank");
    $navList.stop().fadeToggle(500);
  }

  function fadeIn() {
    $logo.toggleClass("is-invisible");
    $navigation.toggleClass("is-open");
  }

  function open() {
    $logo.css("display", "none");
  }

  function setEvent() {
    hamburger();
    fadeIn();
  }

  function init() {
    $open.on("click", open);
    $toggle.on("click", setEvent);
    slider();
  }

  init();
});
