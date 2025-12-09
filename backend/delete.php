<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$id";

if ($conn->query($sql)) {
    echo "<script>alert('User Deleted'); window.location='../frontend/users.html';</script>";
} else {
    echo "Error: " . $conn->error;
}
?>
