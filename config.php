<?php
session_start();
define('DB_SERVER', 'YOUR_DB_HOST');
define('DB_USERNAME', 'YOUR_DB_USER');
define('DB_PASSWORD', 'YOUR_DB_PASS');
define('DB_DATABASE', 'YOUR_DB_NAME');
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
?>
