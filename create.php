<?php
    include('connection.php');

    $name = $_POST['name'];
    $password = $_POST['password'];
    $hashPassword = password_hash($password, PASSWORD_DEFAULT);
    $age = $_POST['age'];

    $data_create = mysqli_query($conn, "INSERT INTO users (name, password, age) VALUES('$name', '$hashPassword', '$age')") or die(mysqli_connect_error());

    if($data_create) {
        echo "data is created";
    }
?>