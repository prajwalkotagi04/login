<?php

    include "connection.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";

    if($con -> query($sql) === TRUE){
        echo "<script>alert('Data Inserted Successfully');
        window.location.href = 'login.html';</script>";
    }
    else{
        echo "<script>alert('Failed to submit data');</script>";
    }

    $con -> close();
    
?>