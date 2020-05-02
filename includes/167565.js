
$(document).ready(function(){
  
// hover
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 6); //hover star
   
    // to highlight all previous stars
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });
  
  
//  click
  $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 6); // The star currently selected
    var stars = $(this).parent().children('li.star');
    $.post("../php/api/rateMovie.php",ratingValue);
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
 var ratingValue = parseInt($('#stars li.selected').last().data('value'), 6);
    var msg = "";
    if (ratingValue > 1) {
        msg = "Thanks! You rated this movie " + ratingValue + " stars.";
    }
    else {
        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
    }
    responseMessage(msg);
    
  });
  
  
});


function responseMessage(msg) {
  $('.success-box').fadeIn(200);  
  $('.success-box div.text-message').html("<span>" + msg + "</span>");
};
