<!DOCTYPE html>
<html>
 <?php include './includes/header.php';   ?> <html>
     
    <body>
    
        
        <div id="loginContainer">
            <form id="loginForm">
             <h2> log In</h2>
        
                   <div class="FormSplit" >
            <label for="username">Username :</label>
              <input type="text"  id = "username" placeholder="Username..." required>
           <small>  error message </small>
                </div>
       
         <div class="FormSplit" >
           <label for="password">Password :</label>
              <input type="password" class ="loginInputField" id = "password"   placeholder="password..." required>
               <small> error message </small>
                       </div>
         
            <button>log In</button>
            <p>New here? <a href="SignUp.html">Sign Up</a> </p>
            
            </form>
        </div>
        
    
        <!-- Links -->
        <script src="includes/loginValidation.js"></script>
      
    </body>
    
    
   <?php include './includes/footer.php';?>
</html>
