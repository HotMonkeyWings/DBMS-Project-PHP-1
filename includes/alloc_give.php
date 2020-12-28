<?php
if (isset($_POST['student-allocno-submit'])) {

  
    require 'db.config.php';

    session_start();
    echo "here";
    $inmate1 = $_POST['inmate1'];
    $inmate2 = $_POST['inmate2'];
    $inmate3 = $_POST['inmate3'];
    $inmate4 = $_POST['inmate4'];
    
    echo "here2";
    $arr = array();
    echo $inmate1;
    $sql1 = "SELECT * FROM room_req WHERE Roll_no1 = '$inmate1'";
    $res = mysqli_query($conn, $sql1);
    while ($row = mysqli_fetch_assoc($res)) {
        array_push($arr, $row);
    }
    $arrlen = count($arr);
    //echo $arrlen;
    
    $num = mysqli_num_rows($res);
    echo $num;
    if($num != NULL){
        echo "This will update the prev request";
        $sql2 = "DELETE FROM room_req WHERE Roll_no1 = '$inmate1'";
        $res = mysqli_query($conn, $sql2);
    }
    $temp = "Waitlisted";
    $sql3 = "INSERT INTO room_req(Roll_no1, Roll_no2, Roll_no3, Roll_no4, status_of_room) VALUES ('$inmate1', '$inmate2', '$inmate3', '$inmate4','$temp')";
    $res = mysqli_query($conn, $sql3);

    header("Location: ../stud.req.page.php");
}
?>