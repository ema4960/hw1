<?php
include 'dbConnect.php';

$email = $_GET["email"];
$passwordUser = $_GET["password"];

if($email!="" && $passwordUser != "" && !isset($_SESSION["username"])){
    $query = "SELECT username,password FROM users WHERE email='".$email."'";
    $result = mysqli_query($conn, $query) or die ("errore: ".mysqli_error($conn)); 
    $num_rows = mysqli_num_rows($result);
    $array = mysqli_fetch_array($result);
    if($num_rows &&  password_verify($passwordUser,$array['password'])){
        
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