<?php
include 'db.php';

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $db->prepare("UPDATE students SET name=?, email=?, program=? WHERE student_id=?");
    $stmt->execute([
        $_POST['name'],
        $_POST['email'],
        $_POST['program'],
        $id
    ]);
    header("Location: index.php");
}

$student = $db->query("SELECT * FROM students WHERE student_id=$id")->fetch();
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

    <form method="POST">
        <input type="text" name="name" value="<?= $student['name'] ?>" required>
        <input type="email" name="email" value="<?= $student['email'] ?>" required>
        <input type="text" name="program" value="<?= $student['program'] ?>" required>
        <button type="submit">Update Student</button>
    </form>
</div>

</body>
</html>
