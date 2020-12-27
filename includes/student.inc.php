<?php

//include('db_connection.inc.php');
include('login.inc.php');

$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM student WHERE Student_Roll_No = '$user_id'";

$result = mysqli_query($db,$query);

if($result)
{
    $student_record = mysqli_fetch_row($result);
    echo ("Welcome $student_record[1]!");
}



?>