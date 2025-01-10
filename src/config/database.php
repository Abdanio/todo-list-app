<?php
$servername = "localhost";
$username = "abdanio";
$password = "abdanio123*#";
$dbname = "to-do-list";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
