<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Add Student</h2>
    <form method="POST" action="">
        <input type="text" name="student_name" placeholder="Student Name" required>
        <input type="text" name="class_division" placeholder="Class and Division" required>
        <input type="text" name="roll_number" placeholder="Roll Number" required>
        <input type="submit" name="save" value="Save">
    </form>
    <p><a href="index.php">Back to Student List</a></p>
</div>

<?php
if (isset($_POST['save'])) {
    $name = $_POST['student_name'];
    $class = $_POST['class_division'];
    $roll = $_POST['roll_number'];

    $sql = "INSERT INTO students (student_name, class_division, roll_number) VALUES ('$name', '$class', '$roll')";
    if ($conn->query($sql)) {
        echo "<script>window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
</body>
</html>
