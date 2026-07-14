<?php
// Registered Email:sunnyraj870931@gmail.com
include 'includes/db.php';

if (!isset($_GET['id'])) {
    header("Location: dashboard.php");
    exit();
}

$id = (int)$_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM tasks WHERE id=$id");

if (mysqli_num_rows($result) == 0) {
    die("Task not found.");
}

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>Edit Task</h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="dashboard.php">Dashboard</a>
</nav>

<div class="container">
    <div class="card">

        <form action="update_task.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <label>Task Title</label>
            <input type="text" name="title"
                value="<?php echo htmlspecialchars($row['title']); ?>" required>

            <label>Description</label>
            <textarea name="description" required><?php echo htmlspecialchars($row['description']); ?></textarea>

            <label>Due Date</label>
            <input type="date" name="due_date"
                value="<?php echo $row['due_date']; ?>" required>

            <label>Status</label>
            <select name="status">
                <option value="Pending" <?php if($row['status']=="Pending") echo "selected"; ?>>Pending</option>
                <option value="Completed" <?php if($row['status']=="Completed") echo "selected"; ?>>Completed</option>
            </select>

            <button type="submit">Update Task</button>

        </form>

    </div>
</div>

</body>
</html>