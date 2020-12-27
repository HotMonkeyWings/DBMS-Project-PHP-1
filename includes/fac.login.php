<?php

if (isset($_POST['login-submit'])) {

  require 'db.config.php';
  session_start();
  $roll = $_POST['username'];
  $password = $_POST['pwd'];

  if (empty($roll) || empty($password)) {
    header("Location: ../login-hostel_manager.php?error=emptyfields");
    exit();
  } else {
    $sql = "SELECT *FROM user WHERE User_ID = '$roll'";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {


      if ($password != $row['Password'] || $row['ForS'] === 'S') {
        header("Location: ../login-hostel_manager.php?error=wrongpwd");
        exit();
      } else if ($password == $row['Password']) {
        
        $_SESSION['login_user_fa'] = $roll;
        $_SESSION['login_user_stud'] = NULL;
        header("Location: faculty-oversee.php");
        exit();
      } else {
        header("Location: ../login-hostel_manager.php?error=strangeerr");
        exit();
      }
    } else {
      header("Location: ../login-hostel_manager.php?error=nouser");
      exit();
    }
  }
} else {
  header("Location: ../login-hostel_manager.php");
  exit();
}
