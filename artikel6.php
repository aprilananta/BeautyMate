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
    <title>How to Get Beautiful Nails</title>
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
            <h1>How to Get Beautiful Nails</h1>
            <div class="author">
                <p>By Dr. Helen Moore, D.P.M.</p>
                <p>Reviewed by Sarah Thompson</p>
            </div>
            <p>Achieving beautiful nails is a combination of proper nail care, good hygiene, and a balanced diet. While salon treatments can help, there are many simple and effective tips you can follow at home to ensure your nails stay healthy and look stunning.</p>
            <h2>Keep Your Nails Clean and Dry</h2>
            <p>Clean and dry nails are less likely to become infected by bacteria and fungi. Make sure to dry your hands and feet thoroughly after washing or bathing, and use a soft nail brush to gently clean under your nails.</p>
            <h2>Moisturize Your Cuticles</h2>
            <p>Dry and cracked cuticles can lead to painful infections. Use a cuticle cream or oil regularly to keep your cuticles soft and healthy. Avoid cutting your cuticles, as this can lead to infections and damage to the nail bed.</p>
            <h2>Trim Your Nails Regularly</h2>
            <p>Regular trimming prevents nails from breaking or splitting. Use sharp nail scissors or clippers and trim your nails straight across, then round the tips in a gentle curve. Avoid biting your nails as this can cause damage and introduce bacteria.</p>
            <h2>Use a Base Coat for Protection</h2>
            <p>Applying a base coat before your nail polish can prevent your nails from becoming stained and can help your polish last longer. Look for a base coat that includes nourishing ingredients to strengthen your nails.</p>
            <h2>Choose Your Nail Products Carefully</h2>
            <p>Not all nail products are created equal. Choose non-toxic nail polishes and removers that are free from harmful chemicals like formaldehyde, toluene, and DBP. These chemicals can weaken your nails and cause them to become brittle.</p>
            <h2>Eat a Balanced Diet</h2>
            <p>Healthy nails start from within. Ensure you are eating a balanced diet rich in vitamins and minerals, particularly biotin, vitamin E, and omega-3 fatty acids. These nutrients can help strengthen your nails and promote growth.</p>
            <h2>Protect Your Nails from Damage</h2>
            <p>Avoid using your nails as tools to open cans or scrape off labels. Wear gloves when doing household chores, gardening, or when your hands are exposed to harsh chemicals or water for long periods.</p>
            <h2>Avoid Gel and Acrylic Nails</h2>
            <p>Frequent use of gel or acrylic nails can weaken your natural nails, leading to thinning and brittleness. If you must use them, try to give your nails a break between applications to recover.</p>
        </article>
    </main>
</body>
</html>