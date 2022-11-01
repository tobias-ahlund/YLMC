<?php

declare(strict_types=1);

require __DIR__."/variables.php";
require __DIR__."/arrays.php";
require __DIR__."/functions.php";

?>

<!DOCTYPE html>
<html lang=<?= $lang; ?>>
    <head>
        <link rel="stylesheet" href="../CSS/style.css">
        <link rel="stylesheet" href="../CSS/header.css">
        <link rel="stylesheet" href="../CSS/nav.css">
        <link rel="stylesheet" href="../CSS/main.css">
        <link rel="stylesheet" href="../CSS/footer.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$title?></title>
    </head>
    <body>

        <!-- Header -->
        <header>
            <!-- Small heading -->
            <h1><?= $heading1; ?></h1>

            <div class="logo-social-wrapper">
                <!-- Logo -->
                <a class="logo" href="index.php"><img src=<?= $logo; ?> alt="company logo"></a>

                <!-- Social media links -->
                <div class="socialContainer">
                    <img class="socialItem" src="../images/fb-logo.png" alt="facebook logo">
                    <img class="socialItem" src="../images/twitter-logo.svg" alt="twitter logo">
                    <img class="socialItem" src="../images/instagram-logo.svg" alt="instagram logo">
                </div>
            </div>

            <!-- Horizontal line -->
            <hr class="hr-header">
        </header>

        <!-- Navigation -->
        <nav>
            <!-- Menu -->
            <a class ="ourBeers" href="index.php">Our beers</a>
            <a class="aboutUs" href="about.php">About us</a>
        </nav>

        <!-- Main -->
        <main> 
            <!-- Beer content -->
            <div class=beersContainer>     
                <?php foreach ($beers as $beer): ?>
                    <div class="beerContainer">
                    <a href="#0" onmouseenter=<?= $beer["jsFunctionEnter"]; ?> onmouseleave=<?= $beer["jsFunctionLeave"]; ?>>
                        <div class="beerItem">
                            <img id="beerImg" src=<?= $beer["img"]; ?> alt=<?= $beer["alt"]; ?>>
                        </div>
                    </a>
                    <div id=<?= $beer["id"]; ?> class="beerItemInfo">
                        <div class="beerIndex">
                            <p class="beer-subheading">Type</p>
                            <p class="beer-info">IPA</p>
                            <p class="beer-subheading">Ingredients</p>
                            <p class="beer-info">Öl</p>
                            <p class="beer-subheading">ABV</p>
                            <p class="beer-info">10%</p>
                            <p class="beer-subheading">Availability</p>
                            <p class="beer-info">Limited edition</p>
                        </div>
                        <div class="hrBeerInfo"></div>
                        <div class="beerText">
                            <p>Info</p>
                            <p>Duis mauris purus, finibus in tristique at, auctor quis arcu. Etiam vestibulum sapien at mauris iaculis commodo. Fusce suscipit neque ante, sed fringilla tellus volutpat a. Nunc porttitor vulputate nulla ut facilisis. Donec tempus lectus at fringilla sollicitudin.</p>
                        </div>
                    </div>    
                </div>
                <?php endforeach; ?> 
            </div>
            <!-- End of beer content -->

        </main>

        <!-- Footer -->
        <footer>
            <hr class="footer-hr">
            <address>
                <p class="footer-text">YLMC AB</p> 
                <p class="footer-text">Turbingatan 6</p>
                <p class="footer-text">417 05 Göteborg</p>
            </address>
        </footer>

        <!-- Link to Javascript file -->
        <script src="../functions.js"></script>
    </body>
</html>