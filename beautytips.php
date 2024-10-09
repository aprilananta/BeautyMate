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
    <title>Beauty Tips</title>
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
        <section class="beauty-tips">
            <h1>Beauty Tips</h1>
            <div class="tips-container">
                <a href="artikel.php" class="tip-card">
                    <img src="Acne.svg" alt="How to Get Clear Skin Fast">
                    <p>How to Get Clear Skin Fast</p>
                    <span>See More</span>
                </a>
                <a href="artikel2.php" class="tip-card">
                    <img src="Hair.svg" alt="Healthy Hair 101">
                    <p>Healthy Hair 101</p>
                    <span>See More</span>
                </a>
                <a href="artikel3.php" class="tip-card">
                    <img src="GlowingSkin.svg" alt="Top 10 Glowing Skin Guides">
                    <p>Top 10 Glowing Skin Guides</p>
                    <span>See More</span>
                </a>
                <a href="artikel4.php" class="tip-card">
                    <img src="BodyCare.svg" alt="Body Care for Radiant Skin">
                    <p>Body Care for Radiant Skin</p>
                    <span>See More</span>
                </a>
                <a href="artikel5.php" class="tip-card">
                    <img src="Makeup.svg" alt="Create a Flawless Makeup">
                    <p>Create a Flawless Makeup</p>
                    <span>See More</span>
                </a>
                <a href="artikel6.php" class="tip-card">
                    <img src="Nails.svg" alt="How to Get Beautiful Nails">
                    <p>How to Get Beautiful Nails</p>
                    <span>See More</span>
            </div>
        </section>
    </main>
</body>
</html>
