<?php
require 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $file_name = basename($_FILES['photo']['name']);
    $target = "uploads/" . $file_name;
    
    // Save only the file name in the database
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
        $stmt = $conn->prepare("INSERT INTO photos (user_id, photo_url) VALUES (?, ?)");
        $stmt->bind_param("is", $user_id, $file_name); // Save file_name only
        $stmt->execute();
    }

    // Redirect to display.php after uploading
    header("Location: display.php");
}
?>
