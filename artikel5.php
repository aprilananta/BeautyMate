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
    <title>Makeup Tips for a Flawless Look</title>
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
            <h1>Create a Flawless Makeup</h1>
            <div class="author">
                <p>By Sarah Collins, Makeup Artist</p>
                <p>Reviewed by Emily Johnson</p>
            </div>
            <p>Achieving a flawless makeup look requires the right techniques and products. Whether you're preparing for a special occasion or simply want to enhance your everyday appearance, these makeup tips will help you look your best.</p>
            
            <h2>Start with a Clean, Moisturized Face</h2>
            <p>Before applying any makeup, ensure your face is clean and well-moisturized. This helps create a smooth canvas and prevents makeup from looking cakey or uneven. Use a gentle cleanser followed by a hydrating moisturizer suited to your skin type.</p>
            
            <h2>Prime Your Skin</h2>
            <p>Using a primer is a crucial step in makeup application. Primers fill in fine lines and pores, creating a smooth surface for foundation. They also help makeup last longer. Choose a primer that suits your skin needs, such as mattifying for oily skin or hydrating for dry skin.</p>
            
            <h2>Choose the Right Foundation</h2>
            <p>Select a foundation that matches your skin tone and type. For a natural look, opt for a lightweight, buildable formula. Apply foundation with a damp beauty sponge or a foundation brush, blending well to avoid any harsh lines.</p>
            
            <h2>Conceal Imperfections</h2>
            <p>Use a concealer that is one to two shades lighter than your foundation to brighten the under-eye area and cover blemishes. Apply it in a triangle shape under the eyes and blend outwards. Set the concealer with a translucent powder to prevent creasing.</p>
            
            <h2>Enhance Your Eyes</h2>
            <p>Eye makeup can make a significant impact on your overall look. Start with an eyeshadow primer to ensure longevity. Use neutral shades for a subtle look or bold colors for a dramatic effect. Don't forget to define your brows, as they frame your face. Finish with eyeliner and mascara for added definition.</p>
            
            <h2>Add a Pop of Color</h2>
            <p>Blush and bronzer can add warmth and dimension to your face. Apply bronzer to the hollows of your cheeks, jawline, and temples for a sun-kissed look. Sweep blush on the apples of your cheeks for a healthy flush. Highlight the high points of your face with a highlighter for a radiant glow.</p>
            
            <h2>Perfect Your Lips</h2>
            <p>For long-lasting lip color, start by exfoliating your lips to remove any dry skin. Apply a lip balm to keep them hydrated. Outline your lips with a lip liner that matches your lipstick, then fill in with your chosen color. Blot with a tissue and reapply for a fuller look.</p>
            
            <h2>Set Your Makeup</h2>
            <p>Setting your makeup ensures it stays in place all day. Use a setting spray or a translucent setting powder to lock everything in. This step is especially important if you have oily skin or if you need your makeup to last for an extended period.</p>
        </article>
    </main>
</body>
</html>