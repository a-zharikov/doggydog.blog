$(document).ready(function(){

  // Images container
  setTimeout(function() {
    $('.images').addClass('_show');
  }, 1000);
  $('.images-wrapper').each(function(){
    var count = $(this).children('.images-wrapper-item').length;
    if (count == 2) {
      $(this).addClass('_two');
    }
    if (count == 3) {
      $(this).addClass('_three');
    }
  });

  // LightGallery
  var gallerId = $('.images-wrapper, .manual-wrapper, .ttx-wrapper').click(function() {(this.id);});
  $(gallerId).lightGallery({
    hash: false,
    share: false,
    download: false,
    rotate: false,
    thumbnail: false,
    selector: 'a',
    thumbWidth: 80,
    thumbMargin: 10,
  });

  // Text raiting
  $('.wpd-rating-title').text('Рейтинг статьи');
});