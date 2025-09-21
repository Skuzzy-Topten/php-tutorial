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
    $created_at_date = $_POST['created_at_date'];

    $data_create = mysqli_query($conn, "INSERT INTO users (name, password, age, message, gender, occupation, created_at_time, created_at_date) VALUES('$name', '$hashPassword', '$age', '$message', '$gender', '$occupation', '$created_at_time', '$created_at_date')") or die(mysqli_connect_error());

    if($data_create) {
        echo "data is created";
    }
?>