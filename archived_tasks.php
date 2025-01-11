<?php include 'src/config/database.php'; ?>
<?php
$sql = "SELECT id, title, description, status, created_at, updated_at FROM tasks WHERE status = 'archived'";
$result = $conn->query($sql);

$tasks = []; // Initialize the $tasks variable

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $tasks[] = $row; // Populate the $tasks array
    }
} else {
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archived Tasks</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include CSS file -->
</head>
<body>
    <div class="container">
        <h1 class="text-center">Archived Tasks</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?php echo $task['id']; ?></td>
                        <td><?php echo $task['title']; ?></td>
                        <td><?php echo $task['description']; ?></td>
                        <td><?php echo $task['status']; ?></td>
                        <td><?php echo $task['created_at']; ?></td>
                        <td><?php echo $task['updated_at']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-secondary">Back to To-Do List</a>
    </div>
    <script src="scripts.js"></script> <!-- Include JavaScript file -->
</body>
</html>
