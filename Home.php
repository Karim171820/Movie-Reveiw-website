<!DOCTYPE html>
<html>

 <?php include './includes/header.php';   ?> 


<body>
 
  <!-- Big-Img -->

  <div class="bgimg" style="background-image: url('Images/BigImage/Fast.jpg');">
    <div class="topleft">
    </div>
    <div class="middle">
      <h1>COMING SOON</h1>
      <hr>
      <p id="demo"></p>
    </div>
    <!-- <div class="bottomleft"> -->
    </div>
    </div>

  <div id="title">
    <h1>Movies</h1>
  </div>
  <!-- Slider -->

  <div id="wrapper">
    <div id="carousel1">
      <div id="content">


      </div>
    </div>

    <button id="prev1" onclick="prevSlide('carousel1','next1','prev1')">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path fill="none" d="M0 0h24v24H0V0z" />
        <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
      </svg>
    </button>
    <button id="next1" onclick="nextslide('carousel1','next1','prev1')">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path fill="none" d="M0 0h24v24H0V0z" />
        <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
      </svg>
    </button>
  </div>


  <!-- End__of_slider1 -->

  <div id="title">
    <h1>Series</h1>
  </div>

  <!-- Slider2 -->
  <div id="wrapper">
    <div id="carousel2">
      <div id="content2">


      </div>
    </div>

    <button id="prev2" onclick="prevSlide('carousel2','next2','prev2')">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path fill="none" d="M0 0h24v24H0V0z" />
        <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
      </svg>
    </button>
    <button id="next2" onclick="nextslide('carousel2','next2','prev2')">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path fill="none" d="M0 0h24v24H0V0z" />
        <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
      </svg>
    </button>
  </div>
  <!-- End-OF-Slider2 -->

  <div id="title">
    <h1>Enime</h1>
  </div>

  <!-- Slider-3 -->
  <div id="wrapper">
    <div id="carousel3">
      <div id="content3">


      </div>
    </div>

    <button id="prev3" onclick="prevSlide('carousel3','next3','prev3')">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path fill="none" d="M0 0h24v24H0V0z" />
        <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
      </svg>
    </button>
    <button id="next3" onclick="nextslide('carousel3','next3','prev3')">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path fill="none" d="M0 0h24v24H0V0z" />
        <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
      </svg>
    </button>
  </div>
  <!-- End-OF-Slider3 -->

  <div id="title">
    <h1>Tv Show</h1>
  </div>

  <!-- Slider4 -->

  <div id="wrapper">
    <div id="carousel4">
      <div id="content4">


      </div>
    </div>

    <button id="prev4" onclick="prevSlide('carousel4','next4','prev4')">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path fill="none" d="M0 0h24v24H0V0z" />
        <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
      </svg>
    </button>
    <button id="next4" onclick="nextslide('carousel4','next4','prev4')">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path fill="none" d="M0 0h24v24H0V0z" />
        <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
      </svg>
    </button>
  </div>
  <!-- End-OF-Slider4 -->


  <div id="title">
    <h1>Latest Trailer</h1>
  </div>

  <div id="Vedio-Section">
    <div id="Vedio_Player"><iframe width="100%" height="400" 
      src="https://www.youtube.com/embed/zAGVQLHvwOY" frameborder="0" 
      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen></iframe> </div>

  </div>



   <?php include './includes/footer.php';?>

  <!-- Links -->
  <script src="includes/script.js"></script>

</body>
</html>
