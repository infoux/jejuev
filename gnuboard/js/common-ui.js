$(document).ready(function() {




  function viewMode() {
    var windowWidth = $(window).width();
    if (windowWidth < 1199) {
      /* mobile */

      $(".menuToggle").click(function() {
        $("#header #menu").css("display", "block");
        $("body").addClass("menu-on");

      });

      $("#header nav .close").click(function() {
        $("#header #menu").removeAttr("style");
        $("body").removeClass("menu-on");
      });

      $("#header nav h2 a").click(function(e) {
        e.preventDefault();
        $("#header .main-menu>li").removeClass("active");
        $(this).parent().parent().addClass("active");
      });



    } else {
      /* pc */

      $("#header nav h2 a").mouseenter(function() {
        $("#header").addClass("hover");
      });
      $("#header").mouseleave(function() {
        $("#header").removeClass("hover");
      });

      $(".indicator .sub>li a").click(function() {
        $(".indicator .sub>li").removeClass("active");
        $(this).parent().addClass("active");
        $(".indicator .sub>li.active").find(".sub-menu").toggle();
      });



    }







  }

  viewMode();



  $('.main .notice .slider').bxSlider({
    mode: 'vertical',
    auto: true,
    pager: false,
    infiniteLoop: true

  });




  $(window).resize(function() {
    viewMode();
  });
});
