<?php
include 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        echo "<script>alert('Login Successful!'); window.location='../frontend/users.html';</script>";
    } else {
        echo "<script>alert('Invalid Password'); window.history.back();</script>";
    }

} else {
    echo "<script>alert('Email not found'); window.history.back();</script>";
}
?>
