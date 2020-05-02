
$(document).ready(function () {

  $.get("http://localhost/project/php/api/readMovie.php", function (result) {
    for (let i = 0; i < result.data.length; i++) {

      let container = document.getElementById("container");

      let div1 = document.createElement("div");
      div1.className = "film";

      let div2 = document.createElement("div");
      div2.className = "film-img";
      div1.appendChild(div2);

      let img = document.createElement("img");
      img = new Image();
      img.src = result.data[i].image;
      img.height = 255;
      img.width = 205;

      let a = document.createElement("a");
      a.href = "moviePage.php?" + result.data[i].id;
      a.appendChild(img);

      div2.appendChild(a);

      let title = document.createElement("div");
      title.className = "text";

      let header = document.createElement("h2");
      header.className = "film-title";
      header.innerHTML = result.data[i].name;

      title.appendChild(header);

      div1.appendChild(title);

      let ratingDiv = document.createElement("div");
      ratingDiv.className = "rating";

      var rating = result.data[i].rate;
      for(let i = 0; i < 5; i++){
        let star = document.createElement("span");
        star.className = "fa fa-star checked";
        if(rating == 0){
          star.style.color = "grey";
        }else{
          star.style.color = "gold";
          rating --;
        }

        ratingDiv.appendChild(star);

      }

      div1.appendChild(ratingDiv);

      container.appendChild(div1);

    }
  });

  // hover
  $('#stars li').on('mouseover', function () {
    var onStar = parseInt($(this).data('value'), 6); //hover star

    // to highlight all previous stars
    $(this).parent().children('li.star').each(function (e) {
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });

  }).on('mouseout', function () {
    $(this).parent().children('li.star').each(function (e) {
      $(this).removeClass('hover');
    });
  });


  //  click
  $('#stars li').on('click', function () {
    var onStar = parseInt($(this).data('value'), 6); // The star currently selected
    var stars = $(this).parent().children('li.star');
    $.post("../php/api/rateMovie.php", ratingValue);

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
