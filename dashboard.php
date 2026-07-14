<?php
// Registered Email:sunnyraj870931@gmail.com
include 'includes/db.php';

$result = mysqli_query($conn, "SELECT * FROM tasks ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>Student Task Dashboard</h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="add_task.php">Add Task</a>
    <a href="dashboard.php">Dashboard</a>
</nav>

<div class="container">

    <div class="card">

        <h2>All Tasks</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Due Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            <?php while($row = mysqli_fetch_assoc($result)) { ?>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo htmlspecialchars($row['title']); ?></td>
                <td><?php echo htmlspecialchars($row['description']); ?></td>
                <td><?php echo $row['due_date']; ?></td>
                <td><?php echo $row['status']; ?></td>

                <td>
                    <a class="edit-btn"
                       href="edit_task.php?id=<?php echo $row['id']; ?>">
                        Edit
                    </a>

                    <a class="delete-btn"
                       href="delete_task.php?id=<?php echo $row['id']; ?>"
                       onclick="return confirmDelete();">
                        Delete
                    </a>
                </td>
            </tr>

            <?php } ?>

        </table>

    </div>

</div>

<script src="js/script.js"></script>

</body>
</html>