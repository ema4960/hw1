<?php
    include 'dbConnect.php';

    $id = $_GET['id'];

    $query = "SELECT * FROM cars WHERE id='".$id."'";
    $result = mysqli_query($conn, $query) or die ("errore: ".mysqli_error($conn)); 
    $array = mysqli_fetch_array($result);
    echo json_encode($array);
?>