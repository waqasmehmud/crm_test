<?php
require_once "config.php";

$name  = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$gclid = $_POST['gclid'] ?? '';
$subId = $_POST['sub_id'] ?? '';

if ($name && $email) {
    $stmt = $conn->prepare("INSERT INTO leads (name, email, gclid, sub_id) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $gclid, $subId);
    $stmt->execute();
    $stmt->close();
    echo "Lead saved successfully! <a href='admin.php'>View Admin</a>";
} else {
    echo "Name and Email are required.";
}

$conn->close();

