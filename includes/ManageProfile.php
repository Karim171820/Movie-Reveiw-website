<?php 

session_start();

include_once 'Database_Connection.php';
    $new_name = $_POST['name'];
    $new_email = $_POST['email'];
    $new_password = $_POST['password'];
    
    if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: ../profile.php?profileEditfail");
    exit();

} else {
    $UpdateSql = "UPDATE user SET U_password = '$new_password', U_name= '$new_name', U_email= '$new_email' WHERE U_ID = ".$_SESSION['ID'].";" ;

    $result = mysqli_query($connection, $UpdateSql);
    $resultCheck = mysqli_num_rows($result);
    
    header("Location: ../profile.php?profileEditSuccsess");
    exit();
}
?>