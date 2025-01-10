<?php include 'src/config/database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="style.css"> <!-- Include CSS file -->
</head>
<body>
    <h1>To-Do List</h1>
    <form action="src/add_task.php" method="POST">
        <input type="text" name="task" placeholder="Enter a new task" required>
        <button type="submit">Add Task</button>
    </form>
    <?php
    $sql = "SELECT * FROM tasks";
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
    <table>
        <thead>
            <tr>
                <th>Task</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?php echo $task['task']; ?></td>
                    <td>
                        <select class="status-select" data-task-id="<?php echo $task['id']; ?>">
                            <option value="pending" <?php if ($task['status'] == 'pending') echo 'selected'; ?>>Pending</option>
                            <option value="completed" <?php if ($task['status'] == 'completed') echo 'selected'; ?>>Completed</option>
                            <option value="not_done" <?php if ($task['status'] == 'not_done') echo 'selected'; ?>>Not Done</option>
                        </select>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="scripts.js"></script> <!-- Include JavaScript file -->
</body>
</html>
