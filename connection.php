<?php
    $host = "localhost";
    $user = "root";
    $password = "1234";
    $database = "php_tutorial";
    $conn = mysqli_connect($host, $user, $password, $database);
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        // echo "Database connected successfully";
    }
    
?>