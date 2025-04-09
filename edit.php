<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Edit Student</h2>
    <form method="POST" action="">
        <input type="text" name="student_name" value="<?= $row['student_name'] ?>" required>
        <input type="text" name="class_division" value="<?= $row['class_division'] ?>" required>
        <input type="text" name="roll_number" value="<?= $row['roll_number'] ?>" required>
        <input type="submit" name="update" value="Update">
    </form>
    <p><a href="index.php">Back to Student List</a></p>
</div>

<?php
if (isset($_POST['update'])) {
    $name = $_POST['student_name'];
    $class = $_POST['class_division'];
    $roll = $_POST['roll_number'];

    $sql = "UPDATE students SET student_name='$name', class_division='$class', roll_number='$roll' WHERE id=$id";
    if ($conn->query($sql)) {
        echo "<script>window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
</body>
</html>
