<?php

session_start();

$dbhost = "localhost";
$dbuser = "monkeywings";
$dbpass = "epicburger";
$dbname = "hostel";

$db = new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die("Connection failed");



?>