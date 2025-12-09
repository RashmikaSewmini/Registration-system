<?php
include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id=$id";
$result = $conn->query($sql);

echo json_encode($result->fetch_assoc());
?>
