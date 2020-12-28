<?php
require 'db.config.php';
if(!isset($_SESSION)){
    session_start();
}
include('login.inc.php');
$inmate1 = $_GET['link1'];
$str_arr = explode (",", $inmate1);
echo "here1";
$query2 = "UPDATE room_req SET status_of_room = 'Denied' WHERE Roll_no1='$str_arr[0]'";

header("location: faculty-oversee.php");
?>
