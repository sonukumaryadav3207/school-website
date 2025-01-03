<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit();
}
?>

<h1>Admin Dashboard</h1>
<ul>
    <li><a href="manage_students.php">Manage Students</a></li>
    <li><a href="manage_courses.php">Manage Courses</a></li>
</ul>
<a href="logout.php">Logout</a>
