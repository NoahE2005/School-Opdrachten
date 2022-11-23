var getal = 0
var randomColor = 0

function kleuraanpassen() {
    getal++; //getal +1
    document.getElementById("teller").textContent = "het getal is " + getal; //de tekst als getal zetten

    for (let i = 0; i < 4; i++) { // Een loop die begint op 0 gaat tot de 4
    var randomColor = Math.floor(Math.random()*16777215).toString(16); // een willekerige kleuren code pakken (Hex color)
  document.getElementsByTagName("p")[i].style.color = "#" + randomColor; //de kleur veranderen door de "RandomColor" variabele
}
}