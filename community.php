
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
    <title>Community</title>
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
    <div class="tabs">
        <button class="tab-button active" onclick="openTab(event, 'ForYou')">For You</button>
        <button class="tab-button" onclick="openTab(event, 'Following')">Following</button>
    </div>
    <div id="ForYou" class="tab-content" style="display: block;">
        <div class="post">
            <div class="user-info">
                <img src="user1.png" alt="User Image" class="profile-img">
                <div>
                    <h2>Aprilia Ananta</h2>
                    <p>@ApriliaAnanta</p>
                </div>
            </div>
            <p>Obsessed with Somethinc's new moisturizer! My skin feels moisturized all day! #skincareobsessed #dewyglow ✨</p>
            <img src="post1.png" alt="Post Image" class="post-img">
            <div class="post-info">
                <span>❤️ 73.7K</span>
                <span>💬 6.2K</span>
            </div>
        </div>
        <!-- Tambahkan postingan lainnya sesuai kebutuhan -->
    </div>
    <div id="Following" class="tab-content">
        <div class="post">
            <div class="user-info">
                <img src="user2.png" alt="User Image" class="profile-img">
                <div>
                    <h2>Maria Elvira</h2>
                    <p>@MariaElvira</p>
                </div>
            </div>
            <p>Obsessed with Somethinc's new moisturizer! My skin feels moisturized all day! #skincareobsessed #dewyglow ✨</p>
            <img src="post2.png" alt="Post Image" class="post-img">
            <div class="post-info">
                <span>❤️ 73.7K</span>
                <span>💬 6.2K</span>
            </div>
        </div>
        <!-- Tambahkan postingan lainnya sesuai kebutuhan -->
    </div>
    <script>
        function openTab(event, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tab-button");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            event.currentTarget.className += " active";
        }
    </script>
</body>
</html>
