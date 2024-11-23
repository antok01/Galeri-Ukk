<?php
require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $photo_id = $_POST['photo_id'];
    $stmt = $conn->prepare("DELETE FROM photos WHERE photo_id = ?");
    $stmt->bind_param("i", $photo_id);
    $stmt->execute();
    header("Location: gallery.php");
}
?>
