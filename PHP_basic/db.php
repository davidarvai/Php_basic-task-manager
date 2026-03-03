<?php
$conn = new mysqli("localhost", "root", "", "php_basic");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>