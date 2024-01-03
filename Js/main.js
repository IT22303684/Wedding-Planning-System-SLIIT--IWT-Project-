let textToType = "Your Wedding Planner AwaitsMake Your wedding Memorable..";
let container = document.getElementById('main-text');
let i = 0;

function typeText() {
    if (i < textToType.length) {
        container.innerHTML += textToType.charAt(i);
        i++;
        setTimeout(typeText, 100);
    }
}


function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += "responsive";
    } else {
        x.className = "topnav";
    }
}


