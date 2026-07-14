<?php
// Registered Email:sunnyraj870931@gamil.com
include 'includes/db.php';

if (isset($_GET['id'])) {

    $id = (int) $_GET['id'];

    $sql = "DELETE FROM tasks WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error deleting task: " . mysqli_error($conn);
    }

} else {
    header("Location: dashboard.php");
    exit();
}
?>