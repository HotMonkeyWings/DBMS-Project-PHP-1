<?php
require 'db.config.php';
if(!isset($_SESSION)){
    session_start();
}
include('login.inc.php');
//require 'faculty-oversee.php';

//require_once 'fac.login.php';

//$fac_id = $_SESSION['login_user_fa'];

$fac_id = $_SESSION['login_user_fa'];
$perm_id = $_GET['link'];
echo("Permission ID : $perm_id");
$sql = "UPDATE approve SET Faculty_ID = '$fac_id', Status_of_Approval = 'Denied' WHERE Permission_ID = '$perm_id'";

$result = mysqli_query($conn,$sql);

if($result){
echo("Request Status updated.");
}
else{
    echo ("Error: ". mysqli_error($conn));
}
header("location: faculty-oversee.php");
?>
