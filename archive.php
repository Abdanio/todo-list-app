<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archive To-Do Item</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Archive To-Do Item</h1>
    <?php
    // Include the database configuration file
    include 'src/config/database.php';

    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the form data
        $id = $_POST['id'];
        $status = 'archived';

        // Prepare and bind
        $stmt = $conn->prepare("UPDATE tasks SET status=? WHERE id=?");
        $stmt->bind_param("si", $status, $id);

        // Execute the statement
        if ($stmt->execute() === TRUE) {
            // Redirect to the index page if the update was successful
            header('Location: index.php');
            exit();
        } else {
            // Display an error message if the update failed
            echo "Error archiving record: " . $stmt->error;
        }

        // Close the statement and the database connection
        $stmt->close();
        $conn->close();
    } else {
        // Get the task ID from the query string
        $id = $_GET['id'];

        // Fetch the task from the database
        $stmt = $conn->prepare("SELECT * FROM tasks WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $task = $result->fetch_assoc();

        // Close the statement
        $stmt->close();
    }
    ?>
    <!-- Form to archive the task -->
    <form id="archiveForm" method="POST" action="archive.php">
        <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
        <p>Are you sure you want to archive the task titled "<?php echo $task['title']; ?>"?</p>
        <button type="submit">Archive Task</button>
        <button type="button" onclick="window.location.href='index.php'">Cancel</button>
    </form>
    <script src="scripts.js"></script>
</body>
</html>
