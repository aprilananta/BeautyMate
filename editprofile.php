<?php 
session_start();
include 'navbar.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="navbar.css">
    <style>
        .error {
            color: red;
            background-color: #fdd;
            margin-top: .5em;
            padding: .5em;
            border-radius: 4px;
        }
    </style>
    <script>
        function validateForm() {
            let username = document.forms["profileForm"]["username"].value;
            let password = document.forms["profileForm"]["password"].value;
            let valid = true;
            let errorMessage = '';

            if (username == "") {
                errorMessage = "Please enter a username.";
                valid = false;
            }

            if (password == "") {
                errorMessage = "Please enter a password.";
                valid = false;
            }

            const disallowedCharacters = /['\\\"!?@=]/;
            if (disallowedCharacters.test(username) || disallowedCharacters.test(password)) {
                errorMessage = "Username atau Password tidak boleh mengandung karakter '\\\"!?@=";
                valid = false;
            }

            if (!valid) {
                document.getElementById("errorMessage").innerText = errorMessage;
            }

            return valid;
        }
    </script>
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
    <main class="profile-main">
        <div class="container">
            <h2>Edit Profile</h2>
            <div class="profile-card">
                <div class="profile-info">
                    <img src="profile.png" alt="User Photo" class="profile-photo">
                    <div class="user-details">
                        <h3><?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Hi, Tamu'; ?></h3>
                    </div>
                </div>
                <form name="profileForm" action="updateprofile.php" method="post" class="profile-form" onsubmit="return validateForm()">
                    <div class="form-group">
                        <label for="username">Username *</label>
                        <input type="text" id="username" name="username" value="<?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : ''; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password *</label>
                        <input type="password" id="password" name="password" value="<?php echo isset($_SESSION['password']) ? htmlspecialchars($_SESSION['password']) : ''; ?>" required>
                    </div>
                    <?php
                    if (isset($_SESSION['error'])) {
                        echo '<div id="errorMessage" class="error">' . $_SESSION['error'] . '</div>';
                        unset($_SESSION['error']);
                    }
                    ?>
                    <button type="submit" class="edit-button">Edit</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>