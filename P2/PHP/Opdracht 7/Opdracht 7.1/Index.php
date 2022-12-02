
<form method="post">
    <input type="text" name="tekstvak"></input>
    <input type="radio" id="9procent" name="Nprocent" value="0">9% Btw</input>
    <input type="radio" id="21procent" name="Tprocent" value="1">21% Btw</input>
    <br>
    <input type="button" id="berekenen" onclick="BtwCheck()">BTW berekenen</input>
</form>

<?php 
$BTWhoog = true;

if(isset($_GET['Nprocent'])){
    $BTWhoog = false;
    } else {
    $BTWhoog = true;
    }

echo "<br><br><br>";
function BtwCheck() {
    if($BTWhoog){
        echo "9procent";
        } 
    
    else {
        echo "21procent";
        }
}

?>