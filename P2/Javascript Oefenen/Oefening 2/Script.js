var canvas = document.getElementById("Canvas"); //var canvas makenn
var canvasXY = canvas.getContext("2d")
var Vierhoek = canvas.getContext("2d")

//var canvasXY = document.getElementById("Canvas").getContext("2d");

//Tekst schrijven
canvasXY.font = "20px Arial";
canvasXY.fillText("Hello", 70, 70);

//document.getElementById("Canvas").getContext("2").fillText("Hello")

Vierhoek.fillStyle = "#DD00DD";
Vierhoek.fillRect(100,100, 100, 100);