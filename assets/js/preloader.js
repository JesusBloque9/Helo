$(document).ready(function() {
  $('#ctn-preloader').addClass('loaded');
  if ($('#ctn-preloader').hasClass('loaded')) {
    // Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
    $('#preloader').delay(1000).queue(function() {
      $(this).addClass('d-none');
    });
  }
});
$(".openNav").click(function() {
  $(".page").addClass("swipe-lft");
  $(".nav").addClass("open");
});
$(".closeNav").click(function() {
  $(".page").removeClass("swipe-lft");
  $(".nav").removeClass("open");
});