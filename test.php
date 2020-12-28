<?php
require 'includes/db.config.php';
session_start();
$arr = array();
$roll = $_SESSION['login_user_stud'];
echo $roll;
$sql = "SELECT * FROM permissions";
$result = mysqli_query($conn, $sql);

echo mysqli_fetch_row($result);
if(!$result){
    echo mysqli_error($conn);
}

while ($row = mysqli_fetch_assoc($result)) {
    array_push($arr, $row);
    echo $row;
}
echo count($arr);
?>