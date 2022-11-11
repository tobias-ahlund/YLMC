<?php

declare(strict_types=1);

date_default_timezone_set('Europe/Stockholm');   

$lang = "en";

$title = "YLMC - Your Local Microbrewing Company";

$topLevelHeading = "Your Local Microbrewing Company";

// Checks the time. Returns "open" if business hours, else "closed"
$timeCheck = date("H:i");

if ($timeCheck >= "17:00" || $timeCheck <= "08:00") {
    $timeCheck = "closed";
} else if ($timeCheck > "08:00" || $timeCheck < "17:00" ) {
    $timeCheck = "open";
    return $timeCheck;
}



