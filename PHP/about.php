<?php

declare(strict_types=1);

require __DIR__ . "/variables.php";
require __DIR__ . "/arrays.php";
require __DIR__ . "/functions.php";

?>

<!DOCTYPE html>
<html lang=<?= $lang ?>>
    <head>
        <link rel="stylesheet" href="../CSS/style.css">
        <link rel="stylesheet" href="../CSS/header.css">
        <link rel="stylesheet" href="../CSS/nav.css">
        <link rel="stylesheet" href="../CSS/main.css">
        <link rel="stylesheet" href="../CSS/about.css">
        <link rel="stylesheet" href="../CSS/footer.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
    </head>

    <body>
        <header>
            <h1><?= $topLevelHeading; ?></h1>

            <div class="logo-social-wrapper">
                <!-- Logo -->
                <a class="logo" href="../index.php"><img src=<?= $logo; ?> alt="company logo"></a>
                <!-- Social media links -->
                <div class="socialContainer">
                    <a href="#0"><img class="socialItem" src="../images/fb-logo.png" alt="facebook logo"></a>
                    <a href="#0"><img class="socialItem" src="../images/twitter-logo.svg" alt="twitter logo"></a>
                    <a href="#0"><img class="socialItem" src="../images/instagram-logo.svg" alt="instagram logo"></a>
                </div>
            </div>
            <hr class="hr-header">
        </header>
        <nav>
            <!-- Menu -->
            <a class="ourBeers" href="../index.php">Our beers</a>
            <a class="aboutUs" href="about.php">About us</a>
        </nav>
        <main>
            <!-- Hero image -->
            <img class="hero" src=<?= getRandomHero(); ?> alt="">

            <article>

                <h2><?= $aboutUsText[1][0]; ?></h2>

                <?php foreach ($aboutUsText[0] as $paragraphs) : ?>
                    <p><?= $paragraphs; ?> </p>
                <?php endforeach; ?>

            </article>
            <article>
                <p>We are currently <?= $timeCheck; ?>!</p>
                <p>Opening hours:<br>
                    Monday-Sunday<br>
                    08:00-17:00
                </p>
            </article>
        </main>
        <footer>
            <hr class="footer-hr">
            <address>
                <p class="footer-text">YLMC AB</p>
                <p class="footer-text">Turbingatan 6</p>
                <p class="footer-text">417 05 Göteborg</p>
            </address>
        </footer>
    </body>
</html>