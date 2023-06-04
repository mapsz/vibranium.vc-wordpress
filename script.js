$(window).scroll(function(){
  $('nav').toggleClass('scrolled', $(this).scrollTop() > 80);
});

$('.venture-hacks-carusel-container .carusel-button-left').click((event) => {
  event.preventDefault();
  $('.venture-hacks-carusel').animate({
    scrollLeft: "-=775px"
  }, "slow");
});

$('.venture-hacks-carusel-container .carusel-button-right').click((event) => {
  event.preventDefault();
  $('.venture-hacks-carusel').animate({
    scrollLeft: "+=775px"
  }, "slow");
});

$('.mobile-menu-open').click(() => {
  $(".mobile-menu").show()
})
$('.mobile-menu-close').click(() => {
  $(".mobile-menu").hide()
})