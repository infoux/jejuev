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

  $(".tabs a").click(function() {
    var active = $(this).attr("data");
    $(".tabs a").removeClass("active");
    $(".tabData").removeClass("active");

    $(this).addClass("active");
    $(".tabData#" + active).addClass("active");

  });



    $(".thumb a").click(function() {
      var active = $(this).attr("data");
      $(".thumb a").removeClass("active");

      $(this).addClass("active");
      $(".big img").attr("src",  "/theme/basic/images/pds01-"+ active +".png");

    });

      $(".thumb2 a").click(function() {
        var active = $(this).attr("data");
        $(".thumb2 a").removeClass("active");
        $(".big").removeClass("active");

        $(this).addClass("active");

        $(".b" + active).addClass("active");

        });


  $(window).resize(function() {
    viewMode();
  });
});
