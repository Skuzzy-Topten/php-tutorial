<?php
    include('connection.php');

    $name = $_POST['name'];
    $password = $_POST['password'];
    $hashPassword = password_hash($password, PASSWORD_DEFAULT);
    $age = $_POST['age'];
    $message = $_POST['message'];
    $gender = $_POST['gender'];
    $occupation = implode(",", $_POST['occupation']);

    $data_create = mysqli_query($conn, "INSERT INTO users (name, password, age, message, gender, occupation) VALUES('$name', '$hashPassword', '$age', '$message', '$gender', '$occupation')") or die(mysqli_connect_error());

    if($data_create) {
        echo "data is created";
    }
?>