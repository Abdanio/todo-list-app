<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete To-Do Item</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Delete To-Do Item</h1>
    <?php
    include 'src/config/database.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];

        $sql = "DELETE FROM tasks WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }

        $conn->close();
        header('Location: index.php');
        exit();
    } else {
        $id = $_GET['id'];
        $result = $conn->query("SELECT * FROM tasks WHERE id=$id");
        $task = $result->fetch_assoc();
    }
    ?>
    <form id="deleteForm" method="POST" action="delete.php">
        <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
        <p>Are you sure you want to delete this item?</p>
        <button type="submit">Yes, Delete</button>
        <button type="button" onclick="window.location.href='index.php'">Cancel</button>
    </form>
    <script src="scripts.js"></script>
</body>
</html>
