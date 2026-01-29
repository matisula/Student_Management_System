<?php include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $db->prepare("INSERT INTO students (name, email, program) VALUES (?, ?, ?)");
    $stmt->execute([
        $_POST['name'],
        $_POST['email'],
        $_POST['program']
    ]);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Add Student</h2>

    <form method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="program" placeholder="Program" required>
        <button type="submit">Add Student</button>
    </form>
</div>

</body>
</html>
