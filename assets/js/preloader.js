$(document).ready(function() {
    setTimeout(function() {
      $('#ctn-preloader').addClass('loaded');
      if ($('#ctn-preloader').hasClass('loaded')) {
        // Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
        $('#preloader').delay(1000).queue(function() {
          $(this).remove();
        });
      }
    }, 3000);
});
$(".openNav").click(function() {
  $(".page").addClass("swipe-lft");
  $(".nav").addClass("open");
});
<<<<<<< HEAD
$("#closeNav").click(function() {  
  $(".page").removeClass("swipe-lft");
  $(".nav").removeClass("open");
});
$("#openNav2").click(function() {
  $(".page").addClass("swipe-lft");
  $(".nav").addClass("open");
});
$("#closeNav2").click(function() {  
=======
$(".closeNav").click(function() {
>>>>>>> 6910a7d7ed48ded21ecb6df32f9cf6c563c2ad15
  $(".page").removeClass("swipe-lft");
  $(".nav").removeClass("open");
});