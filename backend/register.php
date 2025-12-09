<?php
include 'db.php';

$firstName = $_POST['firstName'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirmPassword'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$address = $_POST['address'];

if ($password !== $confirm) {
    echo "<script>alert('Passwords do not match'); window.history.back();</script>";
    exit;
}

$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (first_name,email,password,phone,dob,gender,address)
        VALUES ('$firstName','$email','$hash','$phone','$dob','$gender','$address')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registration Successful!'); window.location='../frontend/login.html';</script>";
} else {
    echo "<script>alert('Error: " . $conn->error . "');</script>";
}
?>
