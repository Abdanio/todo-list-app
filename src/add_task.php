<?php
include 'config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $status = 'pending'; // Default status

    $sql = "INSERT INTO tasks (title, description, status) VALUES ('$title', '$description', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "New task created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
    header("Location: ../index.php");
    exit();
}
?>