<?php
// Database configuration
$host = "localhost";
$user = "root";       // change to your DB username
$pass = "password";           // change to your DB password
$db   = "crm_test";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("DB connection failed: " . $conn->connect_error);
}
