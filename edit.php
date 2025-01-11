<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit To-Do Item</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Edit To-Do Item</h1>
    <?php
    include 'src/config/database.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $sql = "UPDATE tasks SET title='$title', description='$description' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
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
    <form id="editForm" method="POST" action="edit.php">
        <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
        <label for="todoTitle">Title:</label>
        <input type="text" id="todoTitle" name="title" value="<?php echo $task['title']; ?>" required>
        <label for="todoDescription">Description:</label>
        <textarea id="todoDescription" name="description" required><?php echo $task['description']; ?></textarea>
        <button type="submit">Save Changes</button>
    </form>
    <script src="scripts.js"></script>
</body>
</html>
