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
    <meta charset="UTF-8">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap">
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
    <h1>Find the Best Treatment For You!</h1>
    <div class="search-container">
        <input type="text" placeholder="What treatment do you need?" class="search-input">
    </div>
    <h2>Most Searched</h2>
    <div class="tags-container">
    <a href="glowsearch2.php"><span class="tag">Facial Mask</span></a>
        <span class="tag">Facial Mask</span>
        <span class="tag">Facial Mask</span>
        <span class="tag">Facial Mask</span>
        <span class="tag">Facial Mask</span>
        <span class="tag">Facial Mask</span>
        <span class="tag">Facial Mask</span>
    </div>
</main>
<script src="script.js"></script>
</body>
</html>
