<!DOCTYPE html>
<html>
 <?php include './includes/header.php';   ?> <html>
    
    
<body >
    
    <div id="signUpSplit">
     <div id="left"></div>
    <div id="right">
    
    <form id="signUpForm">
     <h2> Sign up</h2>
    
    
        
            
          <div class="FormSplit" >
          <label for="username" >Username :</label>
          <input type="text" id="username" placeholder="Enter your Username" required>
           <small> error message</small>
          </div>
       
        
     <div class="FormSplit" >
          <label for="email">E-mail :</label>
         <input type="email" id="email" placeholder="Enter your email" required >
            <small> error message</small>
        </div>
        
        <div class="FormSplit" >
          <label for="password" >Password :</label>
          <input type="password" id="password" placeholder="Enter password" required> 
            <small> error message</small>
        </div>
        
        <div class="FormSplit" >
          <label for="confPassword">Confirm Password :</label>
          <input type="password"id="confPassword" placeholder="Re-enter password" required>
            <small> error message</small>
        </div>
         
        
    
         <button> Sign up </button>
        <p>Have an account?<a href="login.html"> Log In </a></p>
    
      </form>   
     </div>
    
    </div>
    
    
    <!-- Links -->
      <script src="includes/signUpValidation.js"></script>
    
    </body>

<?php include './includes/footer.php';  ?>
</html>
    
    
 
    <?php
                    include_once './Data/movie@0020reviews/user.frm';
                    $result = mysqli_query($connection,"SELECT * FROM user");
                    ?>
 
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                      <table class='table table-bordered table-striped'>
                       
                      <tr>
                        <td>Name</td>
                        <td>Email id</td>
                        <td>Mobile</td>
                      </tr>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["U_name"]; ?></td>
                        <td><?php echo $row["U_email"]; ?></td>
                        <td><?php echo $row["U_ID"]; ?></td>
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </table>
                     <?php
                    }
                    else{
                        echo "No result found";
                    }
                    ?>