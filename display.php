<?php
require 'db.php';
session_start();

// Redirect to login if not authenticated
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch all photos uploaded by the user
$stmt = $conn->prepare("SELECT * FROM photos WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Debug: Check if query returned results
if ($result->num_rows == 0) {
    echo "<p class='text-center mt-5'>No photos uploaded yet.</p>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Photos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Photo Gallery</a>
            <div>
                <a href="gallery.php" class="btn btn-primary me-2">Upload Photos</a>
                <a href="logout.php" class="btn btn-secondary">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Photo Display Section -->
    <div class="container py-5">
        <h1 class="text-center mb-4">Your Uploaded Photos</h1>
        <div class="row">
            <?php while ($photo = $result->fetch_assoc()): ?>
                <!-- Debug: Display path -->
                <?php echo "Path: uploads/" . htmlspecialchars($photo['photo_url']); ?>
                <div class="col-md-3">
                    <div class="card mb-3">
                        <img src="uploads/<?= htmlspecialchars($photo['photo_url']) ?>" class="card-img-top" alt="Photo">
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>© 2024 Photo Gallery. All Rights Reserved.</p>
    </footer>
</body>
</html>
