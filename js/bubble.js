window.onload = function () {
    var bubbles = document.getElementsByClassName("bubble");
    setTimeout(function () {
        for (var x = 0; x < bubbles.length; x++) {
            bubbles[x].style.opacity = 0;
        }
    }, 3000);
    setTimeout(function () {
        for (var x = 0; x < bubbles.length; x++) {
            bubbles[x].style.display = 'none';
        }
    }, 4000);
};