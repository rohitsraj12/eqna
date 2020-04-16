$(document).ready(function () {
  // mobile navigation
  $("svg").click(function () {
    $(".header__link").slideToggle(2000);
  });

  // scroll functions
  $(window).scroll(function () {
    var winTop = $(document).scrollTop();
    console.log(winTop);

    if (winTop > 300) {
      $("#section__header>header").removeClass("off-scroll__header");
      $("#section__header>header").removeClass("wrap__section");
      $("#section__header").addClass("on-scroll__body-header");
      $("#section__header>header").addClass("on-scroll__header");
    } else if (winTop < 50) {
      $("#section__header").removeClass("on-scroll__body-header");
      $("#section__header>header").removeClass("on-scroll__header");
      $("#section__header>header").addClass("off-scroll__header");
      $("#section__header>header").addClass("wrap__section");
    }
  });
});
