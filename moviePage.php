<!DOCTYPE html>
<html>
    
 <?php include './includes/header.php';   ?>


<body>
          
    <!-- body block        -->
     <div class="filmpage">
            <div class="film-img">
        <a
           href="moviePage.php"> 
            <img class="film-img" alt="The dark knight Rises" src="Images/Movies/dark%20knight%20rises.jpeg"  >
        </a>
        </div>

        <div class="text"> 
            <h2 class="film-title"> The Dark Knight rises </h2>
            <H4>
                <H2><b>description</b></H2>
                Eight years after the Joker's reign of anarchy, Batman, with the help of the enigmatic Catwoman, is forced from his exile to save Gotham City from the brutal guerrilla terrorist Bane.
            </H4>
            <br>
            <br>
            <br>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/GokKUqLcvD8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
         <div class="rating-area">
         <div class='ratings text-center'>
    <ul id='stars'>
      <li class='star' title='Poor' data-value='1'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Fair' data-value='2'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Good' data-value='3'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Excellent' data-value='4'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='WOW!!!' data-value='5'>
        <i class='fa fa-star fa-fw'></i>
      </li>
    </ul>
  </div>
              <div class='success-box'>
    <div class='clearfix'></div>
    <img alt='tick image' width='32' src='Images/Logo/successicon.png'/>
    <div class='text-message'></div>
    <div class='clearfix'></div>
  </div>
         </div>
<!--         Icons-->
            <a
           href="https://www.imdb.com/title/tt7286456/"> 
            <img class="icons" alt="imdb" src="Images/Logo/imdb3.png">
        </a>
          <a
           href="https://www.rottentomatoes.com/m/joker_2019"> 
            <img class="icons" alt="rotten tomattoes" src="Images/Logo/rotten.png" >
        </a>
<!--        comment section-->
         
         <div class="commentSection">
<form action="#" id="commentForm">
    <p> Add a comment :</p> 
 <textarea rows="4" cols="50" name="comment" form="usrform" placeholder="Enter text here..."></textarea>
    <button >sumbit</button>
</form>
    
             
         
         <div id="hidden">
        
 

<div id="comments"> <p>user name </p>
  <p>comment appears here</p>
    <p>user name </p>
  <p>comment appears here</p>
               <p>user name </p>
  <p>comment appears here</p>
               <p>user name </p>
  <p>comment appears here</p>
               <p>user name </p>
  <p>comment appears here</p>
               <p>user name </p>
  <p>comment appears here</p>
               <p>user name </p>
  <p>comment appears here long comment here long comment here long comment here long comment here</p>
               <p>user name </p>
  <p>comment appears here</p>
               <p>user name </p>
  <p>comment appears here</p>
               <p>user name </p>
  <p>comment appears here</p>
               <p>user name </p>
  <p>comment appears here</p>
               <p>user name </p>
  <p>comment appears here</p>
    <p>user name </p>
             </div>
         </div>
<button id="showBtn">Show more</button>
    </div>
         
</div>
        
    
        <script src="includes/167565.js"></script>
        <script src="includes/script.js"></script>
        <script src="includes/AboutUs.js"></script>
    </body>
<!--    ______________________________________________________________________________________________-->
    <?php include './includes/footer.php';?>

    
</html>