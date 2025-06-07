<?php

$host = "192.168.1.24";
$user = "root"; 
$db = "hw"

$conn = mysqli_connect($host,$user,$db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  
?>