<?php
try {
    $db = new PDO("sqlite:students.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->exec("
        CREATE TABLE IF NOT EXISTS students (
            student_id INTEGER PRIMARY KEY AUTOINCREMENT,
            name TEXT NOT NULL,
            email TEXT NOT NULL,
            program TEXT NOT NULL
        )
    ");
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}
?>

