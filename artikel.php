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
    <title>How to Get Clear Skin Fast</title>
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
            <h1>How to Get Clear Skin Fast</h1>
            <div class="author">
                <p>By Dr. Christina Asyl, Ph.D.</p>
                <p>Reviewed by Amanda Cardwell</p>
            </div>
            <p>There is no instant way to clear acne or blemishes, but strategies that can help include avoiding touching the skin or popping pimples, washing frequently, and using products suited to the specific problem and the person’s skin type. In general, people with acne or blemishes have skin that is dry, oily, or a combination of the two. Numerous skin care tips exist for different skin types, and there are also general tips that people can try. Anyone uncertain about their skin care routine should consult a dermatologist for additional advice.</p>
            <h2>Pare back your skincare routine</h2>
            <p>Constant breakouts and social media feeds full of people with seemingly perfect skin (remember, filters aren’t always obvious) can manifest into feeling desperate about managing your skin. This can result in an overcomplicated skincare routine.</p>
            <p>Dr Emma Craythorne, consultant dermatologist at OneWelbeck Skin Health and Allergy, says that one of the most common mistakes people make is “not understanding the type of acne they have. This can result in people using the wrong ingredients or applying too many products to compensate.” She stresses that a simple and repetitive approach is key.</p>
            <p>“The best skincare regime is a consistent one that addresses specific skin concerns,” seconds Dr Ifeoma Ejikeme, founder and medical director of Adonia Medical Clinic. “To see the biggest benefit, it is best to maintain skin treatments and skincare for a minimum of a skin cycle (at least 6-8 weeks).” So, try to be patient with a pared-back routine that doesn’t involve using too many harsh products at once.</p>
            <h2>Double cleanse before bed</h2>
            <p>Tip number two: never go to sleep with your makeup on. No matter what time it is, or how many drinks you’ve had, always wash your face before bed. Then, do it again. “Ensuring that your skin is thoroughly cleansed should be your top priority,” says Niamh Ryan, skin expert and co-founder of Ella & Jo Cosmetics. “Your entire skincare routine rests on this one step.”</p>
            <p>“Your first cleanse will remove surface makeup, product build-up and daily grime, while your second cleanse will clean the skin itself,” continues Ryan. On the days that you wear makeup, use an oil-based cleanser first. And on the other days, try a cleansing milk. For your second cleanse, I would recommend a formula containing salicylic acid as this is great for oily and blemish-prone skin.”</p>
            <h2>Exfoliate often</h2>
            <p>“Exfoliation will help shed dead skin cells, unclogging pores, allowing your skincare products to penetrate better, and leaving your skin looking healthier and more radiant,” assures Dr Sophie Shotter, aesthetic doctor and founder of Illuminate Skin Clinic. To help clear skin, go for chemical exfoliants over physical exfoliants.</p>
            <p>“I would usually introduce AHAs and BHAs two-to-three times per week,” says Shotter. Salicylic acid (a BHA) works wonders on oily skin types, as it penetrates really well.” If you have rosacea or sensitive skin, “stick to PHAs like gluconolactone as they moisturise while gently exfoliating.”</p>
        </article>
    </main>
</body>
</html>
