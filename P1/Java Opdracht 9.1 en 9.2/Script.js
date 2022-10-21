function ChangeImg() {
    var img = document.getElementById('Monkey').src;
    if (img.indexOf('Img/Monkey1.png')!=-1) {
        document.getElementById('Monkey').src  = 'Img/Monkey1.png';
    }
     else {
       document.getElementById('Monkey').src = 'Img/Monkey2.png';
   }

}

function ChangeImg2() {
        var x = document.getElementById("Monkey2");
        if (x.innerHTML === "🙉") {
          x.innerHTML = "🐵";
        } else {
          x.innerHTML = "🙉";
        }
      }

      
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}