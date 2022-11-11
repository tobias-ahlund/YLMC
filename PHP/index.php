<?php

declare(strict_types=1);

session_start();

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
       
   
        
        <!-- test -->
    <?php if (isset($_SESSION["confirmed"]) === false) { ?>
    <form method="post" class=" <?= hideForm(); ?> ">
        <p>This website contains information about alcohol. To continue you need to confirm that you are least 20 years old.</p>
        <input type="submit" name="button-confirm" value="Confirm">
    </form>
    
    <div class=" <?= overlay(); ?> ">

    <?php }
  
    
    
    if (isset($_POST["button-confirm"])) {
        overlay();
        hideForm();
    }

    function overlay() {
        if (isset($_POST["button-confirm"])) {
            $hideOverlay = "";
            echo $hideOverlay;
        } else {
            $overlay = "overlay";
            echo $overlay;
        }
    } 

    function hideForm() {
        if (isset($_POST["button-confirm"])) {
            $hideForm = "form-inactive";
            $_SESSION["confirmed"] = true;
            return $hideForm;
        }
    }

    ?>
<!-- slut test -->
        <header>
            <h1><?= $topLevelHeading; ?></h1>

            <div class="logo-social-wrapper">
                <!-- Logo -->
                <a class="logo" href="index.php"><img src=<?= $logo; ?> alt="company logo"></a>
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
            <a class ="ourBeers" href="index.php">Our beers</a>
            <a class="aboutUs" href="about.php">About us</a>
        </nav>
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
                            <p class="beer-info"><?= $beer["type"]; ?></p>
                            <p class="beer-subheading">Ingredients</p>
                            <p class="beer-info"><?= $beer["ingredients"]; ?></p>
                            <p class="beer-subheading">ABV</p>
                            <p class="beer-info"><?= $beer["abv"]; ?></p>
                            <p class="beer-subheading">Availability</p>
                            <p class="beer-info"><?= $beer["availability"]; ?></p>
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
        <footer>
            <hr class="footer-hr">
            <address>
                <p class="footer-text">YLMC AB</p> 
                <p class="footer-text">Turbingatan 6</p>
                <p class="footer-text">417 05 Göteborg</p>
            </address>
        </footer>
        <!-- test -->
 </div>
 <!-- slut test -->
        <script src="../functions.js"></script>
    </body>
</html>