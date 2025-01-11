<?php include 'src/config/database.php'; ?>
<?php
$sql = "SELECT id, title, description, status, created_at, updated_at FROM tasks";
$result = $conn->query($sql);

$tasks = []; // Initialize the $tasks variable

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $tasks[] = $row; // Populate the $tasks array
    }
} else {
    echo "No tasks found";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="style.css"> <!-- Include CSS file -->
</head>
<body>
    <div class="container">
        <h1 class="text-center">To-Do List</h1>
        <form action="src/add_task.php" method="POST" class="form-inline">
            <input type="text" name="title" class="form-control mb-2 mr-sm-2" placeholder="New Task Title" required>
            <input type="text" name="description" class="form-control mb-2 mr-sm-2" placeholder="Task Description" required>
            <button type="submit" class="btn btn-primary mb-2">Add Task</button>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?php echo $task['id']; ?></td>
                        <td><?php echo $task['title']; ?></td>
                        <td><?php echo $task['description']; ?></td>
                        <td>
                            <select class="status-select" data-task-id="<?php echo $task['id']; ?>">
                                <option value="pending" <?php if ($task['status'] == 'pending') echo 'selected'; ?>>Pending</option>
                                <option value="in-progress" <?php if ($task['status'] == 'in-progress') echo 'selected'; ?>>In Progress</option>
                                <option value="completed" <?php if ($task['status'] == 'completed') echo 'selected'; ?>>Completed</option>
                            </select>
                        </td>
                        <td><?php echo $task['created_at']; ?></td>
                        <td><?php echo $task['updated_at']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $task['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="delete.php?id=<?php echo $task['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="scripts.js"></script> <!-- Include JavaScript file -->
</body>
</html>
