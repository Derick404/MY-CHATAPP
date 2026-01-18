<?php
include 'db.php';
$message = $_POST['message'];
$sender_port = $_POST['sender_port'];
$stmt = $conn->prepare("INSERT INTO messages (sender_port, message) VALUES (?, ?)");
$stmt->bind_param("is", $sender_port, $message);
$stmt->execute();
echo "Message sent";
?>