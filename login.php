<?php
include 'connection.php';

$email = $_POST['email']; 
$password = $_POST['password'];

$stmt = $con->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<script>alert('Record fetch successfully');
    window.location.href = 'register.html';</script>";
} else {
    echo "<script>alert('No record found');</script>";
}

$stmt->close();
$con->close();
?>
