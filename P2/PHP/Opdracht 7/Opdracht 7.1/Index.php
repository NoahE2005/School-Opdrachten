<html>
<form method="post">
    <input type="text" name="tekstvak"></input>
    <input type="radio" id="9procent" name="Nprocent" value="0">9% Btw</input>
    <input type="radio" id="21procent" name="Tprocent" value="1">21% Btw</input>
    <br>
    <input type="button" id="berekenen" onclick="echo BtwCheck()">BTW berekenen</input>
</form>
</html>

<?php 
$BTWhoog = true;

echo "<br><br><br>";
function BtwCheck($getal) {
    if(isset($_GET['Nprocent'])){
        echo "false";
        } elseif (isset($_GET['Tprocent'])) {
        echo "true";
        }
        else {
        echo "Niets";
        }
}


?>