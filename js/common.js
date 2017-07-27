$(document).ready(function() {

  $('.main .notice ul').bxSlider({
    mode: 'vertical',
    autoStart: true,
    pager: false,
    infiniteLoop: true

  });



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


    }







  }

  viewMode();

  $(window).resize(function() {
    viewMode();
  });
});
