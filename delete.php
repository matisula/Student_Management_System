<?php
include 'db.php';

$id = $_GET['id'];
$db->exec("DELETE FROM students WHERE student_id=$id");

header("Location: index.php");
?>
