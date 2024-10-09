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
    <title>Body Care Tips for Radiant Skin</title>
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
        <article>
            <h1>Body Care for Radiant Skin</h1>
            <div class="author">
                <p>By Dr. Miranda Lawson, M.D.</p>
                <p>Reviewed by Jessica Green</p>
            </div>
            <p>Achieving radiant skin is not just about focusing on your face; your body deserves attention too. Here are some tips to keep your body skin healthy, smooth, and glowing.</p>
            
            <h2>Stay Hydrated</h2>
            <p>Drinking plenty of water is crucial for maintaining hydrated and healthy skin. Water helps to flush out toxins and keeps your skin moisturized from the inside out.</p>
            
            <h2>Moisturize Daily</h2>
            <p>Using a good moisturizer daily can help prevent dry skin. Look for products that contain ingredients like hyaluronic acid, glycerin, and natural oils. Apply moisturizer right after a shower to lock in moisture.</p>
            
            <h2>Exfoliate Regularly</h2>
            <p>Exfoliation is key to removing dead skin cells and promoting cell turnover. Use a gentle body scrub or a chemical exfoliant like AHA or BHA once or twice a week.</p>
            
            <h2>Protect Your Skin from the Sun</h2>
            <p>Always apply sunscreen with at least SPF 30 when going outside, even on cloudy days. This helps to protect your skin from harmful UV rays that can cause premature aging and skin cancer.</p>
            
            <h2>Eat a Balanced Diet</h2>
            <p>Your diet plays a significant role in your skin's health. Eat plenty of fruits, vegetables, and healthy fats. Foods rich in antioxidants, vitamins, and minerals can help improve your skin's appearance.</p>
            
            <h2>Get Regular Exercise</h2>
            <p>Exercise increases blood flow, which helps nourish skin cells and keep them healthy. It also helps to remove toxins through sweat and can improve overall skin tone and texture.</p>
            
            <h2>Avoid Hot Showers</h2>
            <p>Hot showers can strip your skin of its natural oils, leading to dryness. Opt for lukewarm water instead and limit your shower time to keep your skin's moisture barrier intact.</p>
            
            <h2>Get Enough Sleep</h2>
            <p>Sleep is essential for skin repair and regeneration. Aim for 7-9 hours of quality sleep per night to wake up with refreshed and radiant skin.</p>
        </article>
    </main>
</body>
</html>