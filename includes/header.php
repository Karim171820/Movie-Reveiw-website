 <?php include ('./includes/Database_Connection.php'); ?> 

<head>
  <!-- jquery -->
  <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<!-- CSS -->
      <link rel="stylesheet" href="includes/styles.css">

    
       <!-- getting title form file name -->
  <title><?php  
ucwords( str_ireplace(array('-', '.php'), array(' ', ''), basename($_SERVER['PHP_SELF']) ) )
?></title>
 
    <!-- nav bar -->
    <nav>
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
        <li><a href="login.php">LOG IN</a>&nbsp&nbsp</li>
        <li><a href="SignUp.php">SIGN UP</a>&nbsp&nbsp</li>
      </ul>
    </div>
          
   <div class="RightNav"><input type="text" placeholder="Search" id="Search"></div> 
  </div>
        
    </nav>
</head>



