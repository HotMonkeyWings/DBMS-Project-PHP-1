<?php
session_start();
include('login.inc.php');
//include('../stud.req.page.php');
//echo $_GET['id']; // output 2489
//echo $_SESSION['curr_perm'];
$roll_no = $_SESSION['user_id'];
$query = "SELECT * FROM student WHERE Student_Roll_No = '$roll_no'";

$result = mysqli_query($db,$query);

if($result)
{
    $student_record = mysqli_fetch_row($result);
    $parent_id = $student_record[6];
        
    $query = "SELECT * FROM parent WHERE Parent_ID = '$parent_id'";

    $result2 = mysqli_query($db,$query);
    if($result2){
        $parent_record = mysqli_fetch_row($result2);
        $phone_no = $parent_record[2];
        $parent_mail = $parent_record[3];
        $senderId = "ABCDEF";

        $rndno=rand(100000, 999999);
        $message = urlencode("otp number.".$rndno);
        echo $rndno;
        $mail_id = 'soujanya_b180491cs@nitc.ac.in';
        //$parent_mail = 'ramshyamdam04@gmail.com';
        $perm = $_GET['link'];
        echo "perm";
        echo $perm;
        $query1 = "UPDATE permissions SET OTP_Sent = '0' WHERE Permission_ID != '$perm'";
        $res1 = mysqli_query($db, $query1);
        $query1 = "UPDATE permissions SET OTP_Sent = '1' WHERE Permission_ID = '$perm'";
        $res1 = mysqli_query($db, $query1);
        
        $query = "UPDATE parent SET Recent_OTP = '$rndno' WHERE Parent_ID = '$parent_id'";
        
        $result = mysqli_query($db, $query);
        $tmp = exec("python3 ../py/AutoMail.py $parent_mail $rndno");
        header("Location: ../stud.req.page.php");
        echo $tmp;
    }

}
