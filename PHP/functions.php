<?php

declare(strict_types=1);

// Returns the company logo
function getLogo() {
    $logo = "/images/logo.svg";
    
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