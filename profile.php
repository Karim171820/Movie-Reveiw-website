
  <?php include './includes/header.php';   ?> <html>
    

    
   <body>
    
    <div id="profileContainer">
    
    <form method ="post" action="includes/ManageProfile.php" id="profileForm">
     <h2> Manage Your Profile </h2>
    
          <div class="FormSplit" >
          <label for="username">Username :</label>
          <input type="text" name="name" id="username" placeholder="Enter your Username" required>
           <small> error message</small>
          </div>
       

     <div class="FormSplit" >
        <label for="email">E-mail :</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required >
            <small> error message</small>
        </div>
        
        <div class="FormSplit" >
          <label for="password">Password :</label>
          <input  type="password" name="password" id="password" placeholder="Enter password" required> 
            <small> error message</small>
        </div>
        
         <button name="edit" type="submit"> Update </button>
         
    
      </form>   
     </div>
<!--    links-->
    
    <script src="includes/profile.js"></script>
    <script src="includes/script.js"></script>
    </body>
    
    
    
   <?php include './includes/footer.php';?>

</html>



