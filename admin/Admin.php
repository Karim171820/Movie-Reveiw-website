<!DOCTYPE html>
<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<title> Admin mode </title>
<link rel="stylesheet" href="includes/styles.css">

</head>
    
    
<body >
    
    <div id="adminSplit">
     <div id="leftForm">
            <form id="banUserForm">
     <h2> Ban user</h2>
    
    
          <div class="FormSplit" >
          <label for="username" >Username :</label>
          <input type="text" id="username" placeholder=" Username" required>
           <small> error message</small>
          </div>
       
         <label for="BanType">ban type :</label>
     <div class="radioArea" >
          
          <input type="radio" id="ban" name="banType" value="ban" required >
         <label for="ban">ban</label>
         <input type="radio" id="suspend" name="banType" value="suspend" required >
          <label for="suspend">suspend</label>
            
        </div>
        
        <div class="FormSplit" >
          <label for="comment" >comment :</label>
          <textarea  id="comment"   rows="6" cols="50" name="comment"  placeholder="type comment here.." ></textarea>
            <small> error message</small>
        </div>
        
    
         <button> confirm </button>
      
    
      </form>
        </div>
        <div id="middleForm">
            <form id="editConentForm">
                <h2> Edit content</h2>
                <div class="FormSplit" >
          <label for="ContentID" >ID :</label>
          <input type="text" id="username" placeholder="Content ID" required>
           <small> error message</small>
               </div>
       
        
     <div class="FormSplit" >
          <label for="email">title :</label>
         <input type="text" id="contentTitle" placeholder="type new title"  required>
            <small> error message</small>
        </div>
        
        <div class="FormSplit" >
          <label for="description" >Description :</label>
            <textarea  id="description"   rows="8" cols="50" name="description"  placeholder="type description here.." ></textarea>
            <small> error message</small>
                </div>
         <button> Update </button>
      </form>
        </div>
        
        
        
        
        
        
    <div id="rightForm">
    
    <form id="removeContentForm">
     <h2> Remove content</h2>
    
 <div class="FormSplit" >
          <label for="ContentID" >ID :</label>
          <input type="text" id="username" placeholder="Content ID" required>
           <small> error message</small>
               </div>
        
        
    
         
        
    
         <button> Remove </button>
       
    
      </form>   
     </div>
    
    </div>
    
    
    <!-- Links -->
      <script src=""></script>
    
    </body>

 <!-- start of footer -->


  <footer class="footer-distributed">

    <div class="footer-left">

      <img src="Images/Logo/logo.png" alt="logo" id="Footer-Logo">

      <!-- <h3>Company<span>logo</span></h3> -->

      <p class="footer-links">
        <a href="Home.html" class="link-1">Home</a>


        <a href="login.html">log in</a>

        <a href="About%20us.html">About us</a>

        <a href="SignUp.html">Sign up</a>

      </p>

      <p class="footer-company-name">Company Name © 2015</p>
    </div>

    <div class="footer-center">

      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p>+1.555.555.5555</p>
      </div>

      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:support@company.com">support@company.com</a></p>
      </div>

    </div>

    <div class="footer-right">

      <p class="footer-company-about">
        <span>About the website</span>
          we provide reviews for many movies , seris, anime and tv shows in English for all ages 
          to make sure you have a perfect exprience.
      </p>

      <div class="footer-icons">

        <a href=""><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-github"></i></a>

      </div>

    </div>

  </footer>
  <!-- end of footer -->
</html>