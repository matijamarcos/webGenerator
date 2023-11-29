<?php
$servername = "localhost";
$username = "adm_webgenerator";
$password = "webgenerator2020";
$dbname = "webgenerator";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>