<?php

session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "lh";

$db = new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die("Connection failed");



?>