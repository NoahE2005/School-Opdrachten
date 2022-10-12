
  function Alert() {
    alert ("Success");
    var color2 = prompt ("Color text1?");
    document.getElementById("Java").style.color = color2;
    var color3 = prompt ("Color text2?");
    document.getElementById("Java2").style.color = color3;
    var color4 = prompt ("Color background?");
    document.body.style.backgroundColor = color4;
  }

  function Disco() {
    document.body.style.backgroundColor = "red";
    setTimeout(Disco2, 500)
  } 
  function Disco2() {
    document.body.style.backgroundColor = "orange";
    setTimeout(Disco3, 500)
  }
  function Disco3() {
    document.body.style.backgroundColor = "yellow";
    setTimeout(Disco4, 500)
  }
  function Disco4() {
    document.body.style.backgroundColor = "green";
    setTimeout(Disco5, 500)
  }
  function Disco5() {
    document.body.style.backgroundColor = "white";
    alert ("Success!")
  }


 function calculate() {
  var num1 = prompt ("Getal?");
  var num = prompt ("Getal2?");
  var som2 = num * num1;
  document.getElementById("Cal"). textContent = som2;
 }

 function ByFive() {
  var byfivenum = Math.floor(Math.random() * 100) + 1;
  var som3 = byfivenum * 5;
  document.getElementById("Cal2"). textContent = som3;
 }

 function SecNaarMin() {
  var num3 = prompt ("Getal (in second)?");
  var som4 = num3 / 60;
  document.getElementById("Cal3"). textContent = som4;
 }


var getal1 = 12;
var getal2 = 4;
var som = getal1 * getal2;



