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
    <title>Healthy Hair 101</title>
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
            <h1>Tips for Healthy Hair</h1>
            <div class="author">
                <p>By Dr. Alex Martin, Trichologist</p>
                <p>Reviewed by Sarah Johnson</p>
            </div>
            <p>Maintaining healthy hair can be a challenge, but with the right tips and products, you can achieve luscious, strong hair. Here are some expert tips to help you on your journey to healthy hair.</p>
            
            <h2>Regular Trims</h2>
            <p>One of the most important steps in maintaining healthy hair is getting regular trims. Cutting off split ends will prevent the damage from traveling up the hair shaft and causing more breakage. Aim for a trim every 6-8 weeks.</p>
            
            <h2>Use the Right Shampoo and Conditioner</h2>
            <p>Choosing the right shampoo and conditioner for your hair type is crucial. If you have oily hair, look for clarifying shampoos, while dry hair benefits from moisturizing formulas. Avoid products with harsh chemicals that can strip your hair of its natural oils.</p>
            
            <h2>Limit Heat Styling</h2>
            <p>Heat styling tools can cause significant damage to your hair. Try to limit the use of hair dryers, straighteners, and curling irons. When you do use them, always apply a heat protectant spray to minimize damage.</p>
            
            <h2>Eat a Balanced Diet</h2>
            <p>Your diet plays a vital role in the health of your hair. Ensure you are getting enough vitamins and minerals, especially iron, vitamin D, and omega-3 fatty acids. Foods like fish, nuts, and leafy greens can help promote hair growth and strength.</p>
            
            <h2>Stay Hydrated</h2>
            <p>Drinking plenty of water is essential for overall health, including the health of your hair. Hydrated hair is less prone to dryness and breakage. Aim to drink at least 8 glasses of water a day.</p>
            
            <h2>Protect Your Hair</h2>
            <p>Environmental factors like sun exposure and pollution can damage your hair. Wear a hat or use a protective spray when you are going to be outside for extended periods. Also, avoid tight hairstyles that can cause stress and breakage.</p>
            
            <h2>Deep Conditioning Treatments</h2>
            <p>Incorporate deep conditioning treatments into your hair care routine to keep your hair moisturized and healthy. Look for masks and treatments that contain natural oils and proteins to strengthen and nourish your hair.</p>
        </article>
    </main>
</body>
</html>