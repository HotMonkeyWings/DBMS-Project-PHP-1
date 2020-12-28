<?php
session_start();
require 'db.config.php';
include('login.inc.php');
$roll_no = $_SESSION['user_id'];
$query = "SELECT * FROM student WHERE Student_Roll_No = '$roll_no'";
$result = mysqli_query($db,$query);

if (isset($_POST['student-otp-submit'])) {
    $otp = $_POST['OTP'];
    $student_record = mysqli_fetch_row($result);
    $parent_id = $student_record[6];
    $query = "SELECT * FROM parent WHERE Parent_ID = '$parent_id'";
    $result2 = mysqli_query($db,$query);
    if($result2){
        $parent_record = mysqli_fetch_row($result2);
        $recent_otp = $parent_record[4];
        $perm = $_SESSION['perm'];
        echo $perm;
        if($otp == $recent_otp)
        {
            $query1 = "UPDATE approve SET Status_of_Approval='Waitlisted' WHERE Permission_ID = '$perm'";
            $res1 = mysqli_query($db, $query1);
            echo $res1;
            echo "Yay";
            header("Location: ../stud.req.page.php");
        }
        else{
            $query1 = "UPDATE approve SET Status_of_Approval='Denied' WHERE Permission_ID = '$perm'";
            $res1 = mysqli_query($db, $query1);
            echo $res1;
            header("Location: ../stud.req.page.php");
        }
    }
}
else {
  header("Location: ../login-student.php?error=notset");
  exit();
}
