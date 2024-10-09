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
    <title>Glow Search</title>
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
        <section class="clinic-info">
            <h1>ERHA Skin, Hair, and Laser Clinic</h1>
            <p>Sociolla Malang Olympic Garden Malang Olympic Garden unit GF 3-5 Jalan Kawi No. 20-24, Kauman, Klojen, Kauman, Klojen, Kota Malang, Jawa Timur 65116, Indonesia</p>
            <div class="clinic-images">
                <img src="erha1.png" alt="Treatment">
                <img src="clinic.png" alt="Clinic">
            </div>
            <div class="info-sections">
                <div class="benefits">
                    <h2>Benefits</h2>
                    <ul>
                        <li>Melembabkan dan mencerahkan kulit</li>
                        <li>Mengurangi garis halus dan kerutan</li>
                        <li>Mengecilkan pori-pori</li>
                        <li>Menenangkan kulit yang iritasi</li>
                        <li>Membersihkan kulit dari kotoran dan minyak</li>
                    </ul>
                </div>
                <div class="types">
                    <h2>Types</h2>
                    <div class="type-item">Masker Hydrating: Untuk kulit kering dan dehidrasi.</div>
                    <div class="type-item">Masker Brightening: Untuk kulit kusam dan tidak merata.</div>
                    <div class="type-item">Masker Anti-Aging: Untuk kulit yang menunjukkan tanda-tanda penuaan.</div>
                    <div class="type-item">Masker Detoxifying: Untuk membersihkan kulit dari kotoran dan minyak.</div>
                    <div class="type-item">Masker Soothing: Untuk menenangkan kulit yang iritasi.</div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
