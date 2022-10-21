function ChangeImg() {
    var img = document.getElementById('Monkey').src;
    if (img.indexOf('Img/Monkey1.png')!=-1) {
        document.getElementById('Monkey').src  = 'Img/Monkey1.png';
    }
     else {
       document.getElementById('Monkey').src = 'Img/Monkey2.png';
   }

}