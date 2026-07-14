<?php
// Registered Email: sunnyraj870931@gmail.com
include 'includes/db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $due_date = $_POST['due_date'];

    if (empty($title) || empty($description) || empty($due_date)) {
        $message = "Please fill all fields.";
    } else {

        $sql = "INSERT INTO tasks (title, description, due_date)
                VALUES ('$title', '$description', '$due_date')";

        if (mysqli_query($conn, $sql)) {
            $message = "Task Added Successfully!";
        } else {
            $message = "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>Add New Task</h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="dashboard.php">Dashboard</a>
</nav>

<div class="container">

    <div class="card">

        <?php
        if($message!=""){
            echo "<p><strong>$message</strong></p>";
        }
        ?>

        <form method="POST" onsubmit="return validateForm();">

            <label>Task Title</label>
            <input type="text" id="title" name="title">

            <label>Description</label>
            <textarea id="description" name="description"></textarea>

            <label>Due Date</label>
            <input type="date" id="due_date" name="due_date">

            <button type="submit">Save Task</button>

        </form>

    </div>

</div>

<script src="js/script.js"></script>

</body>
</html>