








// Shorthand for $( document ).ready()
$(function() {
  "use strict";
  $('.username').blur(function () {
  if ($(this).val().length < 4) {
    $(this).css('border', "2px solid #F00");
    $(this).parent().find('.costom-alert').fadeIn(200);
      $(this).parent().find('.disclaimer').fadeIn(100);
  }else {
    $(this).css('border', "2px solid #080");
      $(this).parent().find('.costom-alert').fadeOut(200);
    $(this).parent().find('.disclaimer').fadeUot(100);
  }
  });
});
