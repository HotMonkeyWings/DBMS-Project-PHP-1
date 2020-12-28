<?php

if (isset($_POST['student-login-submit'])) {

  
  require 'db.config.php';

  session_start();

  $roll = $_POST['student_roll_no'];
  $password = hash('md5',$_POST['pwd']);
  
  if (empty($roll) || empty($password)) {
    header("Location: ../login-student.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT *FROM user WHERE User_ID = '$roll'";
    $result = mysqli_query($conn, $sql);

    if(!$result){
      echo "Result1" . mysqli_error($conn);
    }

    if($row = mysqli_fetch_assoc($result)){
    //   $pwdCheck = password_verify($password, $row['Password']);
    
    
    if($password != $row['Password'] || $row['ForS'] == "F"){
        header("Location: ../login-student.php?error=wrongpwd");
        exit();
      }
      else if($password == $row['Password']) {
        $_SESSION['login_user_stud'] = $roll;
        $_SESSION['login_user_fa'] = NULL;
        $_SESSION['user_id'] = $roll;
        header("Location: ../stud.req.page.php");
      }
      else {
        header("Location: ../login-student.php?error=strangeerr");
        exit();
      }
    }
    else{
      header("Location: ../login-student.php?error=nouser");
      exit();
    }
  }

}
else {
  header("Location: ../login-student.php?error=notset");
  exit();
}
