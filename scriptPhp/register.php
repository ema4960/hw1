<?php

header('Location: /hw1/index.php'); 
include 'dbConnect.php';

    $username= $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];

    $query = "SELECT username FROM users WHERE username='".$username."'";
    $result = mysqli_query($conn, $query) or die ("errore: ".mysqli_error($conn)); 
    $num_rows = mysqli_num_rows($result);

    if($num_rows!=1){
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); 

        $query = "INSERT INTO users(username,password,email) VALUES ('".$username."','".$hashedPassword."','".$email."')";
        mysqli_query($conn, $query) or die ("errore: ".mysqli_error($conn)); 
    }

    mysqli_close($conn);
?>