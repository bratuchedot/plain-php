<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'emilijan');
define('DB_PASS', 'qwerty');
define('DB_NAME', 'plain_php');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
