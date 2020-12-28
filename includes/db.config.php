<?php
  session_start();
  $servername = "localhost"; 
  $dBUsername = "monkeywings";
  $dBPassword = "epicburger";
  $dBName = "hostel";
 // session_start();
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>
