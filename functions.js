//JavaScript functions

// These functions will make the beer information box hidden or visible, depending on if the cursor pointer is currently on any of the beer images or not
jsFunctionEnterBeer1();
jsFunctionLeaveBeer1();

function jsFunctionEnterBeer1() {
    let checkCursorBeer = document.getElementById("beer1");
    if (checkCursorBeer.style.visibility === "hidden") {
        checkCursorBeer.style.visibility = "visible";
    } else {
        checkCursorBeer.style.visibility = "hidden";
    }
}

function jsFunctionLeaveBeer1() {
    let checkCursorBeer = document.getElementById("beer1");
    if (checkCursorBeer.style.visibility === "visible") {
        checkCursorBeer.style.visibility = "hidden";
    } 
}

jsFunctionEnterBeer2();
jsFunctionLeaveBeer2();

function jsFunctionEnterBeer2() {
    let checkCursorBeer = document.getElementById("beer2");
    if (checkCursorBeer.style.visibility === "hidden") {
        checkCursorBeer.style.visibility = "visible";
    } else {
        checkCursorBeer.style.visibility = "hidden";
    }
}

function jsFunctionLeaveBeer2() {
    let checkCursorBeer = document.getElementById("beer2");
    if (checkCursorBeer.style.visibility === "visible") {
        checkCursorBeer.style.visibility = "hidden";
    } 
}

jsFunctionEnterBeer3();
jsFunctionLeaveBeer3();

function jsFunctionEnterBeer3() {
    let checkCursorBeer = document.getElementById("beer3");
    if (checkCursorBeer.style.visibility === "hidden") {
        checkCursorBeer.style.visibility = "visible";
    } else {
        checkCursorBeer.style.visibility = "hidden";
    }
}

function jsFunctionLeaveBeer3() {
    let checkCursorBeer = document.getElementById("beer3");
    if (checkCursorBeer.style.visibility === "visible") {
        checkCursorBeer.style.visibility = "hidden";
    } 
}
