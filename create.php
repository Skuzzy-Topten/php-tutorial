<?php
    include('connection.php');

    $name = $_POST['name'];

    $data_create = mysqli_query($conn, "INSERT INTO users (name) VALUES('$name')") or die(mysqli_connect_error());

    if($data_create) {
        echo "data is created";
    }
?>