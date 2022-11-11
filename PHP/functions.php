<?php

declare(strict_types=1);

// Returns the company logo
function getLogo() {
    $logoReversed = "gvs.ogol/segami/";
    
    $logo = strrev($logoReversed);
    
    return $logo;
}

// Returns a random hero image from the array
function getRandomHero() {
    $heroImages = [
        "../images/hero1.svg",
        "../images/hero2.svg",
        "../images/hero3.svg"
    ];
    $getRandomHero = array_rand($heroImages);
    
    $hero = $heroImages[$getRandomHero];
    
    return $hero;
}

// If the user clicks the "Confirm" button the confirm age window will disappear
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