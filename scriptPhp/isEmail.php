<?php
include 'dbConnect.php';

$mail = mysqli_real_escape_string($conn,$_GET["email"]);
if($mail!=""){
    $query = "SELECT email FROM users WHERE email='".$mail."'";
    $result = mysqli_query($conn, $query) or die ("errore: ".mysqli_error($conn)); 
    $num_rows = mysqli_num_rows($result);
    if($num_rows){
        echo true;
    }else{
        echo false;
    }
}else{
}

mysqli_close($conn);

?>