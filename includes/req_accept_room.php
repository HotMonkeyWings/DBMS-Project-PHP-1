<?php
require 'db.config.php';
if(!isset($_SESSION)){
    session_start();
}
include('login.inc.php');

$inmate1 = $_GET['link1'];
$str_arr = explode (",", $inmate1);
$arr = array();
$query = "SELECT * FROM room WHERE No_of_Inmates =0";
$res = mysqli_query($conn, $query); 
while ($row = mysqli_fetch_assoc($res)) {
    array_push($arr, $row);
}
$coun = count($arr);
if($coun == 0){
    echo "No free rooms. Reject the request";
    $q = "UPDATE room_req status_of_room = 'Denied' WHERE Roll_no1='$str_arr[0]'";
    $r = mysqli_query($conn, $q);
}
$row = $arr[0];
$room_id = $row['Room_ID'];
echo $room_id;
$query2 = "UPDATE room SET No_of_Inmates='4',inmate1='$str_arr[0]',inmate2='$str_arr[1]',inmate3='$str_arr[2]',inmate4='$str_arr[3]' WHERE Room_ID='$room_id'";
$res2 = mysqli_query($conn, $query2);
$q = "UPDATE room_req SET status_of_room = 'Allocated' WHERE Roll_no1='$str_arr[0]'";
$r = mysqli_query($conn, $q);
echo "done yay!";
header("location: faculty-oversee.php");
?>