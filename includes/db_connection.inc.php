<?php

session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Souji123.";
$dbname = "hostel";

$db = new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die("Connection failed");



?>