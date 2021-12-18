<?php

$servername = "localhost";
$username = "";
$password = "";
$dbname = "enozom";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  // echo " done";
}
?>
