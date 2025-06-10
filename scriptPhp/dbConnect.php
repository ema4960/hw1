<?php

$host = "localhost:3306";
$password="";
$user = "root"; 
$db = "Hw";

$conn = mysqli_connect($host,$user,$password,$db)or die ("errore: ".mysqli_connect_error($conn));
  
?>