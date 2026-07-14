<?php
// Registered Email:sunnyraj870931@gmail.com
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = (int)$_POST['id'];
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $due_date = $_POST['due_date'];
    $status = $_POST['status'];

    if (empty($title) || empty($description) || empty($due_date) || empty($status)) {
        die("All fields are required.");
    }

    $sql = "UPDATE tasks SET
            title='$title',
            description='$description',
            due_date='$due_date',
            status='$status'
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    header("Location: dashboard.php");
    exit();
}
?>