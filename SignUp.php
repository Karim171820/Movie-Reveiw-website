<!DOCTYPE html>



<html>
 <?php include './includes/header.php';   ?> <html>
    
    
<body>
    
    <div id="signUpSplit">
     <div id="left"></div>
    <div id="right">

    <form  method="post"   id="signUpForm">
     <h2> Sign up</h2>
        
          <div class="FormSplit" >
          <label for="username" >Username :</label>
          <input type="text" id="username" name="Uname" placeholder="Enter your Username" required >
           <small> error message</small>
          </div>
       

     <div class="FormSplit" >
          <label for="email">E-mail :</label>
         <input type="email" id="email" name="Uemail" placeholder="Enter your email" required  >
            <small> error message</small>
        </div>
        
        <div class="FormSplit" >
          <label for="password" >Password :</label>
          <input type="password" id="password" name="Upassword"placeholder="Enter password"required  > 
            <small> error message</small>
        </div>
        
        <div class="FormSplit" >
          <label for="confPassword">Confirm Password :</label>
          <input type="password"id="confPassword" name="Uconfpass" placeholder="Re-enter password"required  >
            <small> error message</small>
        </div>
         
        
         <button value="submit" type="submit" > Sign up </button>
        <p>Have an account?<a href="login.php"> Log In </a></p>
    
      </form>   
     </div>
    
    </div>
  
    
    <!-- Links -->
    
      <script ><?php include "includes/signUpValidation.js"; ?></script>
    
    </body>

<?php include './includes/footer.php';  ?>
</html>
    
<?php

$name = $_POST['Uname'];
$email = $_POST['Uemail'];
$password = $_POST['Uconfpass'];



   if(empty($name) || empty($email) || empty($password)){
    //diable blank submission

  }else{

    if (isset($_POST['submit'])) {
    }
     else {

       $SQL = "INSERT into user (U_name,U_email,U_password,isAdmin,U_ID)
   values ('$name','$email','$password','0','NULL')";
    mysqli_query($connection, $SQL);
  }
  
  }
?>
