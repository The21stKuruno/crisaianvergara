$(function() {
  setBindings();
});

// Navigation Scroll Smooth
function setBindings() {
  $(".smooth-scroll").click(function(e) {
    e.preventDefault();
    var sectionID = e.currentTarget.id + "-section";

    $("html, body").animate(
      {
        scrollTop: $("#" + sectionID).offset().top
      },
      1000
    );
  });
}
