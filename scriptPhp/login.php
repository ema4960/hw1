<?php
include 'dbConnect.php';

$email = mysqli_real_escape_string($conn,$_GET["email"]);
$password = mysqli_real_escape_string($conn,$_GET["password"]);

if($email!="" && $password != "" && !isset($_SESSION["username"])){
    $query = "SELECT username FROM users WHERE password='".$password."' AND email='".$email."'";
    $result = mysqli_query($conn, $query) or die ("errore: ".mysqli_error($conn)); 
    $num_rows = mysqli_num_rows($result);
    $array = mysqli_fetch_array($result);
    if($num_rows){
        
        session_start();
        $_SESSION["username"]=$array["username"];
        session_commit();
        echo $_SESSION["username"];
        
    }else{
        echo false;
    }
}else{
}

mysqli_close($conn);

?>