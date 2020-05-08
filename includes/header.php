<?php session_start(); ?>

 <?php include ('./includes/Database_Connection.php'); ?> 
 <!DOCTYPE html>
<head>
  <!-- jquery -->
  <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<!-- CSS -->
      
  <style><?php include 'includes/styles.css'; ?></style>
    
       <!-- getting title form file name -->
  <title>
      <?php  
ucwords( str_ireplace(array('-', '.php'), array(' ', ''), basename($_SERVER['PHP_SELF']) ) )
?></title>
 
    <!-- nav bar -->


    <?php 
if(isset($_SESSION['NAME'])){

  if($_SESSION['ACCSESSLVL']==1){
 echo'<nav>
   <div class="Content">
 <div class="LeftNav">
     <a href="Home.php"> <img src="Images/Logo/logo.png" alt="logo" id="logo"> </a> 
 </div>

 <div class="MiddleNav">
   <ul>
     <li><a href="Home.php">HOME</a> &nbsp&nbsp</li>
     <li><a href="profile.php">PROFILE</a>&nbsp&nbsp</li>
     <div class="dropdown">
       <!-- <button class="dropbtn">Category  -->
         <li id="dropbtn">  CATEGORY</li>
       <!-- </button -->
       <div class="dropdown-content">
         <a href="Movies.php">Movies</a>
         <a href="Series.php">Series</a>
         <a href="anime.php">Anime</a>
         <a href="Tvshow.php">Tv Show</a>
       </div>
     </div> 
   
     <!-- <li><a href="Category">Category</a>&nbsp&nbsp</li> -->
     <li> <a href="admin/Admin.php">ADMIN</a> &nbsp&nbsp</li>
   </ul>
   
 </div>
       
<div class="RightNav"><input type="text" placeholder="Search" id="Search"></div> 
</div>
     
 </nav>
 <div id="UserInfo">
 <form action="includes/logout.php">
 <label for="name" >'. $_SESSION['NAME'].'</label>
<button type="submit" >logout</button>
</form>
</div>
 
 ';
  }
  else if($_SESSION['ACCSESSLVL']==0){
    echo'<nav>
      <div class="Content">
    <div class="LeftNav">
        <a href="Home.php"> <img src="Images/Logo/logo.png" alt="logo" id="logo"> </a> 
    </div>
   
    <div class="MiddleNav">
      <ul>
        <li><a href="Home.php">HOME</a> &nbsp&nbsp</li>
        <li><a href="profile.php">PROFILE</a>&nbsp&nbsp</li>
        <div class="dropdown">
          <!-- <button class="dropbtn">Category  -->
            <li id="dropbtn">  CATEGORY</li>
          <!-- </button -->
          <div class="dropdown-content">
            <a href="Movies.php">Movies</a>
            <a href="Series.php">Series</a>
            <a href="anime.php">Anime</a>
            <a href="Tvshow.php">Tv Show</a>
          </div>
        </div> 
      
        <!-- <li><a href="Category">Category</a>&nbsp&nbsp</li> -->
        <li> <a href="About%20us.php">ABOUT US</a> &nbsp&nbsp</li>
      </ul>
    </div>
         
   <div class="RightNav"><input type="text" placeholder="Search" id="Search"></div> 
   </div>
        
    </nav>
    <div id="UserInfo">
    <form action="includes/logout.php">
    <label for="name" >'. $_SESSION['NAME'].'</label>
   <button type="submit" >logout</button>
   </form>
   </div>
    ';

  }


   }
   else{
    echo'<nav>
    <div class="Content">
  <div class="LeftNav">
      <a href="Home.php"> <img src="Images/Logo/logo.png" alt="logo" id="logo"> </a> 
  </div>
 
  <div class="MiddleNav">
    <ul>
      <li><a href="Home.php">HOME</a> &nbsp&nbsp</li>
      <div class="dropdown">
        <!-- <button class="dropbtn">Category  -->
          <li id="dropbtn">  CATEGORY</li>
        <!-- </button -->
        <div class="dropdown-content">
          <a href="Movies.php">Movies</a>
          <a href="Series.php">Series</a>
          <a href="anime.php">Anime</a>
          <a href="Tvshow.php">Tv Show</a>
        </div>
      </div> 
    
      <!-- <li><a href="Category">Category</a>&nbsp&nbsp</li> -->
      <li> <a href="About%20us.php">ABOUT US</a> &nbsp&nbsp</li>
      <li><a href="login.php"> LOG IN</a>&nbsp&nbsp</li>
      <li><a href="SignUp.php"> SIGN UP</a>&nbsp&nbsp</li>
    </ul>
  </div>
  
 <div class="RightNav"><input type="text" placeholder="Search" id="Search"></div> 
 </div>

  </nav>';
   }
?>
</head>
