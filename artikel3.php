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
    <title>Top 10 Beauty Tips for Glowing Skin</title>
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
            <h1>Top 10 Glowing Skin Guides</h1>
            <div class="author">
                <p>By Dr. Jane Doe, Dermatologist</p>
                <p>Reviewed by John Smith</p>
            </div>
            <p>Achieving glowing skin can seem like a challenge, but with the right tips and routines, it’s definitely achievable. Here are the top 10 beauty tips to help you get that radiant, healthy glow you’ve always wanted.</p>
            <h2>1. Stay Hydrated</h2>
            <p>One of the simplest and most effective ways to improve your skin’s appearance is by staying hydrated. Drink at least 8 glasses of water a day to keep your skin hydrated from the inside out.</p>
            
            <h2>2. Eat a Balanced Diet</h2>
            <p>A diet rich in fruits, vegetables, lean proteins, and healthy fats can do wonders for your skin. Foods high in antioxidants, such as berries and leafy greens, help protect your skin from damage and keep it looking youthful.</p>
            
            <h2>3. Use Sunscreen Daily</h2>
            <p>Protect your skin from harmful UV rays by applying sunscreen every day, even on cloudy days. Look for a broad-spectrum sunscreen with an SPF of at least 30.</p>
            
            <h2>4. Get Enough Sleep</h2>
            <p>Sleep is crucial for skin health. Aim for 7-9 hours of quality sleep each night to allow your skin to repair and regenerate.</p>
            
            <h2>5. Cleanse Your Skin Properly</h2>
            <p>Always cleanse your skin before going to bed to remove makeup, dirt, and pollutants. Use a gentle cleanser suited to your skin type to avoid irritation.</p>
            
            <h2>6. Exfoliate Regularly</h2>
            <p>Exfoliation helps remove dead skin cells and promotes cell turnover. Use a chemical exfoliant with AHAs or BHAs 2-3 times a week for best results.</p>
            
            <h2>7. Moisturize Daily</h2>
            <p>Keep your skin hydrated by using a moisturizer suitable for your skin type. Even oily skin needs hydration to maintain its balance.</p>
            
            <h2>8. Incorporate Serums</h2>
            <p>Serums are packed with active ingredients that target specific skin concerns. Look for serums with vitamin C, hyaluronic acid, or retinol to enhance your skincare routine.</p>
            
            <h2>9. Avoid Touching Your Face</h2>
            <p>Touching your face can transfer dirt and bacteria from your hands to your skin, leading to breakouts. Try to keep your hands away from your face throughout the day.</p>
            
            <h2>10. Manage Stress</h2>
            <p>Stress can negatively impact your skin. Practice stress-management techniques such as yoga, meditation, or deep-breathing exercises to keep your skin looking its best.</p>
        </article>
    </main>
</body>
</html>