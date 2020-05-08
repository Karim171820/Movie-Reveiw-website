<?php include './includes/header.php';   ?>




<html>
 
     
    <body>
        <div id="loginContainer">
            <form method="post" action="includes/loginBackend.php" id="loginForm">
             <h2> log In</h2>
        
                   <div class="FormSplit" >
            <label for="username">Username :</label>
              <input type="text" name="username" id = "username" placeholder="Username..." >
           <small>  error message </small>
                </div>
       
         <div class="FormSplit" >
           <label for="password">Password :</label>
              <input type="password" name = "password" class ="loginInputField" id = "password"   placeholder="password..." >
               <small> error message </small>
                       </div>
         
            <button name="submit" value="submit" type="submit" >log In</button>
            <p>New here? <a href="SignUp.php">Sign Up</a> </p>
            
            </form>
        </div>
        
    
        <!-- Links -->
        <script><?php include "includes/loginValidation.js";?></script>
      
    </body>
    

   <?php include './includes/footer.php';?>
</html>