window.onload = init;

function init() {
    var b1 = document.getElementById("b1");
    var b2 = document.getElementById("b1");

    b1.onclick = mostraPopUp;
    b2.onclick = escondePopUp;
}

function mostraPopUp() {
    document.getElementById("b1").style.visibility = "visible";
}

function escondePopUp() {
    document.getElementById("d1").style.visibility = "hidden";
}