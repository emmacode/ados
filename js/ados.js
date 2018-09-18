$(document).ready(function () {
  //Change color on scroll
  $(window).scroll(function () {
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 500);
  });
  $('scrolled').css('color','red');
});