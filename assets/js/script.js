$(document).ready(function () {
  // Menu burger
  $(".burger").on("click", function () {
    $(this).toggleClass("active"); 
    $(".nav-links").toggleClass("active"); 

    
    if ($(this).hasClass("active")) {
      $(".slider").addClass("move-down");
    } else {
      $(".slider").removeClass("move-down");
    }
  });

  
  $(document).click(function (e) {
    if (!$(e.target).closest(".burger, .nav-links").length) {
      $(".nav-links").removeClass("active");
      $(".burger").removeClass("active");
      $(".slider").removeClass("move-down"); 
    }
  });

  
  $(window).resize(function () {
    if ($(window).width() >= 768) {
      $(".slider").removeClass("move-down"); 
      $(".burger").removeClass("active"); 
      $(".nav-links").removeClass("active"); 
    }
  });
});
