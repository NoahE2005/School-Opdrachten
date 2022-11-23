<?php
echo "Het is vandaag " . date("l") ." ". date("Y/m/d") . "<br>";

echo "<br>";

echo "Vandaag is het de " . date("z"). "de dag van het jaar<br>";

echo "<br>";

echo  date("l") . " is de " . date("w") ."de dag van de week<br>";

echo "<br>";

echo "De maand " . date("F"). " heeft in totaal " . date("t"). " dagen";

echo "<br>";

$DATE =  date("L");
echo "Het jaar " . date("Y"). " en dat jaar is ";
if($DATE == 1) {
    echo "een schrikkeljaar";
}
else {
    echo " geen schrikkeljaar";
}

?>