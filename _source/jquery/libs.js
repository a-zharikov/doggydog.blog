$(document).ready(function(){

  // Search
  $('body').on('click', '.search-link', function(){
    $('.search-form').addClass('active');
  });
  
  $('body').on('click', '.search-form .closed', function(){
    $('.search-form').removeClass('active');
  });

});