<img src="https://media3.giphy.com/media/lr1PGJlmI7YMbG7Iwq/giphy.gif?cid=ecf05e47apfkgt66ltykxdlta5gqlujfq624zenfntyv0vpx&rid=giphy.gif">

# Brewery website

A website for a fictional brewery.

**[Go to website.](https://tobias-ahlund.com/project/PHP/)**

# Installation

1. Get the repo
2. Start a local server (may I suggest localhost:7500?)
3. Go to http://localhost:7500/PHP/index.php

# Code review

Code review written by Emma Hedlund.

1. `about.php and index.php` - konsekvent formatering hade gjort koden enklare att läsa
 
2. `about.php: 65` - Hade varit bra med en kommentar för att tydligare förstå vad foreachen gör för något

3. `index.php and about.php` - Istället för att ha med <Doctype html> och <head> med länkar till din css på båda sidorna hade du kunnat lägga det i en header.php och sen använda require på båda sidorna - hade genererat i en tydligare filstruktor och mindre kod 
    
4. `functions.php: 14` - $heroImages som innehåller en array och ligger i en funktion hade förmodligen varit tydligare om den hade deklarerats i arrays.php
    
5. `index.php:60-68` - Jag förstår när jag kollar i den arrays.php att variablen $beers är en array som du använder en foreach på i index.php. Hade underlättat med en kommentar för att enklare förstå vad den refererar till vid första anblick 
    


# Testers

Tested by the following people:

1. Anna Brumark
2. Gustav Enoksson

# License

See the LICENSE file.
