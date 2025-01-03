<?php
include('../includes/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (name, email, phone, course) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $email, $phone, $course]);

    echo "Student added successfully!";
}
?>

<form method="POST">
    <input type="text" name="name" placeholder="Student Name" required>
    <input type="email" name="email" placeholder="Student Email" required>
    <input type="text" name="phone" placeholder="Phone Number">
    <input type="text" name="course" placeholder="Course">
    <button type="submit">Add Student</button>
</form>
