<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['first_name'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql = "UPDATE users SET first_name='$name', phone='$phone', address='$address' WHERE id=$id";

if ($conn->query($sql)) {
    echo "<script>alert('User Updated Successfully'); window.location='../frontend/users.html';</script>";
} else {
    echo "Error: " . $conn->error;
}
?>
