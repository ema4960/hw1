<?php
include 'dbConnect.php';

    session_start();
    $username = $_SESSION['username'];
    $id =  $_GET['id'];

    $query = "SELECT * FROM favorited WHERE username_user='".$username."' AND id_car='".$id."'";
    $result = mysqli_query($conn, $query) or die ("errore: ".mysqli_error($conn)); 
    $num_rows = mysqli_num_rows($result);
    
    if($num_rows!=1){
    
        $query = "INSERT INTO favorited(username_user,id_car) VALUES ('".$username."','".$id."')";
        mysqli_query($conn, $query) or die ("errore: ".mysqli_error($conn)); 
        echo true;
    }else{
        $query = "DELETE FROM favorited WHERE id_car='".$id."' AND username_user='".$username."'";
        mysqli_query($conn, $query) or die ("errore: ".mysqli_error($conn)); 
        echo false;
    }

    mysqli_close($conn);
?>