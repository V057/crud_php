<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_php";

// Create connection
$conn = mysqli_connect($servername, $username, '', $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";