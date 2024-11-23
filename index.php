<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <!-- Include Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Photo Gallery</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Welcome to the Pntzy Gallery</h1>
            <p class="lead">Tempat mengupload kenangan kenangnan manis anda</p>
            <a href="login.php" class="btn btn-light btn-lg mt-3">Get Started</a>
        </div>
    </header>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container text-center">
            <h2>Why Use Our Gallery?</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <i class="bi bi-lock-fill text-primary" style="font-size: 3rem;"></i>
                    <h5 class="mt-3">Secure</h5>
                    <p>Your photos are stored safely and securely.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-images text-primary" style="font-size: 3rem;"></i>
                    <h5 class="mt-3">Beautiful Gallery</h5>
                    <p>View your photos in a sleek, responsive gallery layout.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-cloud-upload-fill text-primary" style="font-size: 3rem;"></i>
                    <h5 class="mt-3">Easy to Use</h5>
                    <p>Upload and manage photos effortlessly.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>© 2024 Photo Gallery. All Rights Reserved.</p>
    </footer>
</body>
</html>
