<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Landing Page</title>
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="landingPage.php">
                <img src="logo.png" alt="Logo" class="logo-img">
            </a>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="glowsearch.php">Glow Search</a></li>
                <li><a href="beautytips.php">Beauty Tips</a></li>
                <li><a href="community.php">Community</a></li>
                <?php if(isset($_SESSION['username'])): ?>
                    <li><a href="logout.php">Log Out</a></li>
                <?php endif; ?>
                <li><span class="username"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Tamu'; ?></span></li>
            </ul>
        </nav>
        <div class="user-icon">
            <a href="profile.php">
                <img src="profile%20icon.svg" alt="User Icon">
            </a>
        </div>
    </header>

    <main>
        <section class="hero">
            <h1>Your Beauty Mate</h1>
            <p>All Your Beauty-Needs Here!</p>
            <button>Find Here</button>
            <div class="search-bar">
                <img src="young%20man%20pointing%20at%20search%20bar.svg" alt="Search Icon">
            </div>
        </section>

        <section class="explore">
            <h2>Explore More</h2>
            <div class="cards-container">
                <div class="card">
                    <a href="glowsearch.php">
                    <img src="glowsearch.png" alt="Glow Search">
                    <p>Glow Search</p></a>
                </div>
                <div class="card">
                    <a href="beautytips.php">
                    <img src="beautytips.png" alt="Beauty Tips">
                    <p>Beauty Tips</p></a>
                </div>
                <div class="card">
                    <a href="community.php">
                    <img src="community.png" alt="Community">
                    <p>Community</p></a>
                </div>
            </div>
        </section>
    </main>
</body>
</html>