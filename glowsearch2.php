<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glow Search</title>
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="landingPage.php">
                <img src="logo.png" alt="Logo" class="logo-img">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="glowsearch.php">Glow Search</a></li>
                <li><a href="beautytips.php">Beauty Tips</a></li>
                <li><a href="community.php">Community</a></li>
            </ul>
        </nav>
        <div class="user-icon">
            <a href="profile.php">
                <img src="profile%20icon.svg" alt="User Icon">
            </a>
        </div>
    </header>
    <main>
        <section class="treatment-results">
            <h1>Treatment Result</h1>
            <p>Uncover Specialized Care for Your Skin!</p>
            <div class="results-container">
            <a href="glowsearch3.php" class="result-card">
                <div>
                    <img src="erha.png" alt="Facial Mask">
                    <p>Facial Mask</p>
                    <p>ERHA, Malang</p>
                    <p class="price">IDR 250.000</p>
                     <p class="rating">★ 4.8</p>
                 </div>
                </a>
                <div class="result-card">
                    <img src="erha.png" alt="Facial Mask">
                    <p>Facial Mask</p>
                    <p>ERHA, Malang</p>
                    <p class="price">IDR 250.000</p>
                    <p class="rating">★ 4.8</p>
                </div>
                <div class="result-card">
                    <img src="erha.png" alt="Facial Mask">
                    <p>Facial Mask</p>
                    <p>ERHA, Malang</p>
                    <p class="price">IDR 250.000</p>
                    <p class="rating">★ 4.8</p>
                </div>
                <div class="result-card">
                    <img src="erha.png" alt="Facial Mask">
                    <p>Facial Mask</p>
                    <p>ERHA, Malang</p>
                    <p class="price">IDR 250.000</p>
                    <p class="rating">★ 4.8</p>
                </div>
                <div class="result-card">
                    <img src="erha.png" alt="Facial Mask">
                    <p>Facial Mask</p>
                    <p>ERHA, Malang</p>
                    <p class="price">IDR 250.000</p>
                    <p class="rating">★ 4.8</p>
                </div>
                <div class="result-card">
                    <img src="erha.png" alt="Facial Mask">
                    <p>Facial Mask</p>
                    <p>ERHA, Malang</p>
                    <p class="price">IDR 250.000</p>
                    <p class="rating">★ 4.8</p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
