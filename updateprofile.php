<?php
include 'navbar.php'; 

$conn = new mysqli('localhost', 'root', '', 'pemweb', 3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_username = $_POST['username'];
    $new_password = $_POST['password'];

    if (isset($_SESSION['username'])) {
        $old_username = $_SESSION['username'];

        $sql = "UPDATE akun SET username='$new_username', password='$new_password' where username = '$old_username'";
        $_SESSION['username'] = $new_username;
        $_SESSION['password'] = $new_password;

        if ($conn->query($sql) === TRUE) {
            echo "Profile updated successfully.";
            header("Location: profile.php"); 
            exit();
        } else {
            echo "Error updating profile: " . $conn->error;
        }
    } else {
        echo "User ID is not set in the session.";
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
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
                <form action="updateprofile.php" method="post" class="profile-form">
                    <div class="form-group">
                        <label for="username">Username *</label>
                        <input type="text" id="username" name="username" value="<?php echo $username; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile Number *</label>
                        <input type="text" id="mobile" name="mobile" value="082238962381" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" value="lunatasya@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password *</label>
                        <input type="password" id="password" name="password" value="********" required>
                    </div>
                    <button type="submit" class="edit-button">Edit</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
