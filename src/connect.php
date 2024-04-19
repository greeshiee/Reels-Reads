<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "reads_reels";
    $conn=new mysqli($host, $user, $pass, $db);
    if($conn->connect_error){
        echo "Failed to connect to DB".$conn->connect_error;
    }
    else{
        echo "Connected to DB";
    }
?>