<?php
// Registered Email: sunnyraj870932@gmail.com

$servername = "localhost";
$username = "root";
$password = "";
$database = "student_task_db";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>