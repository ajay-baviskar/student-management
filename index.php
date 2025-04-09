<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Student List</h2>
    <p><a href="add.php">Add New Student</a></p>
    <table>
        <tr>
            <th>Student Name</th>
            <th>Class and Division</th>
            <th>Roll Number</th>
            <th>Action</th>
        </tr>

        <?php
        $result = $conn->query("SELECT * FROM students");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['student_name']}</td>
                <td>{$row['class_division']}</td>
                <td>{$row['roll_number']}</td>
                <td class='action'>
                    <a href='edit.php?id={$row['id']}'>Edit</a> | 
                    <a href='delete.php?id={$row['id']}' onclick=\"return confirm('Are you sure to delete?');\">Delete</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
