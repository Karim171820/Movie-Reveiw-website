<?php
if (isset($_POST['submit'])) {
  require 'Database_Connection.php';
  $username = $_POST['username'];
  $password =  $_POST['password'];
  if (empty($username)||empty($password)) {
      header("Location: ../home.php?error=emptyfields");
      exit();
  } else {  
    $SQL= " SELECT * FROM user WHERE U_name=?;";
    $statment = mysqli_stmt_init($connection);
      if (!mysqli_stmt_prepare( $statment,$SQL)) {
          header("Location: ../home.php?error=sqlerror");
          exit();
      } else {
        mysqli_stmt_bind_param($statment,"s",$username);
        mysqli_stmt_execute($statment);
        $result= mysqli_stmt_get_result($statment);
      
          if ($row = mysqli_fetch_assoc($result)) {
            $checkpass =false;
              if ($password==$row['U_password']) {
               $Checkpass = true;
              } else {
                $Checkpass = false;
              }
              if ( $Checkpass == false) {
                  header("Location: ../home.php?error=Wrongpassword");
                  exit();
              } else {
                session_start();
                $_SESSION['ID'] = $row['U_ID'];
                $_SESSION['MAIL'] = $row['U_email'];
                $_SESSION['NAME'] = $row['U_name'];
                $_SESSION['ACCSESSLVL'] = $row['isAdmin'];
                  if ($_SESSION['ACCSESSLVL'] == 1)
                       {
                        header("Location: ../admin/Admin.php?AdminMode");
                        exit();
                    }
                  else if ($_SESSION['ACCSESSLVL'] == 0) 
                    {
                     header("Location: ../Home.php?login=WelcomeToMovieReviews");
                     exit();
                    }
              }
          } else {
              header("Location: ../Home.php?error=NoUser");
              exit();
          }
      }
  }
 }
?>
