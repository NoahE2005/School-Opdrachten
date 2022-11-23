var getal = 0
var randomColor = 0

function kleuraanpassen() {
    getal++;
    document.getElementById("teller").textContent = "het getal is " + getal;


    for (let i = 0; i < 4; i++) {
    var randomColor = Math.floor(Math.random()*16777215).toString(16);
  document.getElementsByTagName("p")[i].style.color = "#" + randomColor;
}
}