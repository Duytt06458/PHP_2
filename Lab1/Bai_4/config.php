<?php
$servername = "localhost";
$username = "root";
$password = "00000";
$db = "freshop";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
  die("Kết nối thất bại: " . $conn->connect_error);
}

?>