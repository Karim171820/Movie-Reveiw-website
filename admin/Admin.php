
  
    <html>
  <?php include '../includes/adminHeader.php';  ?>
   
<body >
  
    <div id="adminSplit">
     <div id="leftForm">
            <form method="post" id="banUserForm">
     <h2> Ban user</h2>
    
    
          <div class="FormSplit" >
          <label for="ID"> ID :</label>
          <input type="text" name="userID" id="UID" placeholder="User ID.." required>
           <small> error message</small>
          </div>
       
         <button name="banUser" type="submit"> confirm </button>
      </form>
        </div>

        <div id="middleForm">
            <form method="post" id="editConentForm">
                <h2> Edit Movie</h2>
                <div class="FormSplit" >
          <label for="MovID" >ID :</label>
          <input type="text" name="MOVID" id="username" placeholder="Content ID" required>
           <small> error message</small>
               </div>
       
        
     <div class="FormSplit" >
          <label>title :</label>
         <input type="text" name="Movetitle" id="contentTitle" placeholder="type new title"  required>
            <small> error message</small>
        </div>
        
        <div class="FormSplit" >
          <label for="description" >Description :</label>
            <textarea  name="Movedesc" id="description"   rows="4" cols="50"   placeholder="type description here.." ></textarea>
            <small> error message</small>
                </div>


                <div class="FormSplit" >
          <label for="imgurl" >ImageUrl :</label>
            <textarea  name="ImgUrl" id="imgurl"   rows="2" cols="30" name="description"  placeholder="type Image url here.." ></textarea>
            <small> error message</small>
                </div>


         <button name="midbtn" type="submit"> Update </button>
      </form>
        </div>
        
         
        
        
    <div id="rightForm">
    
    <form method="post" id="removeContentForm">
     <h2> Remove Movie</h2>
    
 <div class="FormSplit" >
          <label for="MovieID" >ID :</label>
          <input type="text" name="DelMovieID" id="deletemovie" placeholder="Content ID" required>
           <small> error message</small>
               </div>
      
         <button name="DelMovie" type="submit"> Remove </button>
      
      </form>   
     </div>
    
    </div>
    
    <!-- Links -->
      <script src=""></script>
    
    </body>

</html>


<?php
if (isset($_POST['banUser'])) {
    $mID = $_POST['userID'];
    $result = mysqli_query($connection, "SELECT * FROM user where U_ID='$mID';");
    if (mysqli_num_rows($result) > 0) {
        $BanSQL = "DELETE FROM user WHERE U_ID = '$mID';";
        mysqli_query($connection, $BanSQL);
    }
}
?>

<?php


    if (isset($_POST['midbtn'])) {
        $MOVid = $_POST['MOVID'];
    $title = $_POST['Movetitle'];
    $Description = $_POST['Movedesc'];
    $img = $_POST['ImgUrl'];
    $result = mysqli_query($connection, "SELECT * FROM movie where id = '$MOVid';");

if (mysqli_num_rows($result) > 0){
    $UpdateSql = "UPDATE movie SET name = '$title', description= '$Description', image= '$img' WHERE id = '$MOVid';" ;

     mysqli_query($connection, $UpdateSql);
    
 }
}
?>



<?php
if (isset($_POST['DelMovie'])) {
    $id = $_POST['DelMovieID'];
    $result = mysqli_query($connection, "SELECT * FROM movie where id = '$id';");
    if (mysqli_num_rows($result) > 0) {
        $DelSQL = "DELETE FROM movie WHERE id = '$id';";
        mysqli_query($connection, $DelSQL);
    }
}
?>

