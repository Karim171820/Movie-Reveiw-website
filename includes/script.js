


// Set the date we're counting down to
var countDownDate = new Date("April 25, 2020 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function () {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);


// DropDown Effect

$("#dropbtn").click(function(){
  $(".dropdown-content").slideToggle();
});
// End-OF-DropDown-Effect

// Search

$(function() {
    var availableMovies =  [
        "Joker",
        "Captain America Winter Solider",
        " Captain America  First Avenger",
        "Iron Man 1",
        "Iron Man 2",
        "Green Mile",
        "InterStaller",
        "Inception",
        "Batman Vs SuperMan",
        "HomeAlone",
        "Elite",
        "GameOfTrhones",
        "Breaking Bad",
        "PeakyBlinders",
        "8 Miles",
        "Shashwenk Redmeption",
        "God Father"
    ];
    $( "#Search" ).autocomplete({
       source: availableMovies
    });
 });

// End-OF-Search

// slider



// Dummy-Series


// Dummy-Enime







const gap = 150;

const carousel = document.getElementById("carousel"),
    content = document.getElementById("content"),
    next = document.getElementById("next"),
    prev = document.getElementById("prev");


function nextslide(carouselID, nextID, prevID) {

    let carousel = document.getElementById(carouselID);
    carousel.scrollBy( gap, 0);
    if (carousel.scrollWidth !== 0) {
        document.getElementById(prevID).style.display = "flex";
    }
    // if (content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
    //     document.getElementById(nextID).style.display = "none";
    // }

}

function prevSlide(carouselID, nextID, prevID) {

    let carousel = document.getElementById(carouselID);
    carousel.scrollBy(-(gap), 0);
    // if (carousel.scrollLeft - width - gap <= 0) {
    //     document.getElementById(prevID).style.display = "none";
    // }
    if (!content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
        document.getElementById(nextID).style.display = "flex";
    }
}

let width = document.getElementById("carousel3").offsetWidth;
window.addEventListener("resize", e => (width = document.getElementById("carousel1").offsetWidth));




// document.getElementById("next1").addEventListener("click", e => {
//   carousel.scrollBy(width + gap, 0);
//   if (carousel.scrollWidth !== 0) {
//     prev.style.display = "flex";
//   }
//   if (content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
//     next.style.display = "none";
//   }
// });

// prev.addEventListener("click", e => {
//     carousel.scrollBy(-(width + gap), 0);
//     if (carousel.scrollLeft - width - gap <= 0) {
//         prev.style.display = "none";
//     }
//     if (!content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
//         next.style.display = "flex";
//     }
// });



// end of slider


//PHP Request
$(document).ready(function(){
  $.get("http://localhost/project/php/api/readMovie.php", function(result){

for (let i = 0; i < result.data.length ; i++) {
    
    let img = document.createElement("img");
    img = new Image();
    img.src = result.data[i].image; 
    img.id = result.data[i].id;
    img.className = "item";
    let container = document.getElementById("content");
    container.appendChild(img);

}


  });

$.get("http://localhost/project/php/api/readSeries.php", function(result){
console.log(result);


  for (let i = 0; i < result.data.length ; i++) {

    let img = document.createElement("img");
    img = new Image();
    img.src = result.data[i].image; 
    img.className = "item";
    let container = document.getElementById("content2");
    container.appendChild(img);

}
});
  
$.get("http://localhost/project/php/api/readAnime.php",function(result){
  console.log(result);
  

  for (let i = 0; i < result.data.length ; i++) {

    let img = document.createElement("img");
    img = new Image();
    img.src = result.data[i].image; 
    img.className = "item";
    let container = document.getElementById("content3");
    container.appendChild(img);

}
});

$.get("http://localhost/project/php/api/readTvShow.php",function(result){
for (let i = 0; i < result.data.length ; i++) {

  let img = document.createElement("img");
  img = new Image();
  img.src = result.data[i].image; 
  img.className = "item";
  let container = document.getElementById("content4");
  container.appendChild(img);

}
});





 

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
