$(function() {
  $('.material-list-item').on('click', function() {
    if($(this).hasClass("done-border")) {
      $(this).removeClass("done-border");
    } else {
      $(this).addClass("done-border");
    }
  })
})
