<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
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
            <a href="profile.html">
                <img src="profile%20icon.svg" alt="User Icon">
            </a>
        </div>
    </header>
    <main>
        <section class="profile-header">
            <div class="header-bg">
                <div class="profile-container">
                    <img src="profile.png" alt="User Photo" class="profile-photo">
                    <div class="profile-info">
                        <h2 class="username"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Luna Anastasya'; ?></h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="profile-options">
            <a href="editprofile.php" class="option">Edit Profile</a>
        </section>
    </main>
</body> 
</html>