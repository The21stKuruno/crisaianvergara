$(function() {
  setGoToTop();
  setDropNav();
});

function setDropNav() {
  $(".icon").click(function() {
    $("#dropbar").toggleClass("visible");
  });

  $("section, footer, .main").click(function() {
    $("#dropbar").removeClass("visible");
  });

  $(window).resize(function() {
    $("#dropbar").removeClass("visible");
  });
}

// Got to top Button
function setGoToTop() {
  var offset = 320;
  var duration = 800;

  $(window).scroll(function() {
    if ($(this).scrollTop() > offset) {
      $("#go-top").fadeIn(duration);
      $(".fade-me").fadeIn(duration);
    } else {
      $("#go-top").fadeOut(duration);
    }
  });

  // Click event to scroll to top
  $("#go-top").click(function() {
    $("html, body").animate({ scrollTop: 0 }, 800);
    return false;
  });
}
