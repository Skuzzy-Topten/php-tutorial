<?php
    include('connection.php');

    $name = $_POST['name'];
    $password = $_POST['password'];
    $hashPassword = password_hash($password, PASSWORD_DEFAULT);
    $age = $_POST['age'];
    $message = $_POST['message'];
    $gender = $_POST['gender'];
    $occupation = implode(",", $_POST['occupation']);
    $created_at_time = $_POST['created_at_time'];

    $data_create = mysqli_query($conn, "INSERT INTO users (name, password, age, message, gender, occupation, created_at_time) VALUES('$name', '$hashPassword', '$age', '$message', '$gender', '$occupation', '$created_at_time')") or die(mysqli_connect_error());

    if($data_create) {
        echo "data is created";
    }
?>