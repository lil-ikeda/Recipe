$(function(){
  $('.js_modal_open').on('click',function(){
      $('.js_modal').fadeIn();
  });
  $('.js_modal_close').on('click',function(){
      $('.js_modal').fadeOut();
      return false;
  });
});
