<?php

$servername = "us-cdbr-east-04.cleardb.com";
$username = "bac4e4198e821a";
$password = "d5ae5777";
$database = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else { 
 // echo '<script>alert("Connected successfully")</script>';
}
?>
