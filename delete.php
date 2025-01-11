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
    // Include the database configuration file
    include 'src/config/database.php';

    // Validate the ID from the GET request
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];

        // Prepare the SQL statement to delete the task
        $stmt = $conn->prepare("DELETE FROM tasks WHERE id = ?");
        $stmt->bind_param("i", $id);

        // Execute the statement and check if it was successful
        if ($stmt->execute() === TRUE) {
            // Close the statement and connection
            $stmt->close();
            $conn->close();
            // Redirect to the index page
            header('Location: index.php');
            exit();
        } else {
            // Display an error message if the deletion failed
            echo "<p>Error deleting record: " . $stmt->error . "</p>";
        }

        // Close the statement
        $stmt->close();
    } else {
        // Display an error message if the ID is invalid
        echo "<p>Invalid ID.</p>";
    }
    // Close the database connection
    $conn->close();
    ?>
    <button type="button" onclick="window.location.href='index.php'">Back to List</button>
    <script src="scripts.js"></script>
</body>
</html>
