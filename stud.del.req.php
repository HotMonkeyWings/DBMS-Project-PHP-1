<?php
require 'includes/db.config.php';
$arr = array();
$roll = $_SESSION['login_user_stud'];
$sql = "SELECT * FROM permissions WHERE Student_Roll_No='$roll'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    array_push($arr, $row);
}

$val1 = $_POST['delete'];
$Permission_ID =  $arr[(int)$val1]['Permission_ID'];
$sqldel = "DELETE FROM permissions where Permission_ID = '$Permission_ID'";
$result1 = mysqli_query($conn, $sqldel);
if(!$result1){
    echo "Error: " . mysqli_errno($conn);
    echo "PermID" . $Permission_ID;
}
header("Location: stud.req.page.php");
?>