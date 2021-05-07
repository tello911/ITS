<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$DBname = "its";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $DBname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//
$date = new DateTime("now", new DateTimeZone('Asia/Kuala_Lumpur'));
$date = $date->format('Y-m-d');
?>