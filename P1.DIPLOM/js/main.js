//  popup for auth form
$('.btn-warning').click(function () {
    $('.popup-bg').fadeIn(300);});
$('.btn-close').click(function () {  $('.popup-bg').fadeOut(300);
});
$('.popup-bg').click(function (e) {  if (!$(e.target).closest(".popup").length) {
  $('.popup-bg').fadeOut(300);  }
});

//  img background slider
const myCarouselElement = document.querySelector('#myCarousel')
const carousel = new bootstrap.Carousel(myCarouselElement, {  interval: 1500,
  touch: false});
