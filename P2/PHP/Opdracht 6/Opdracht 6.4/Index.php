<?php 
$Omtrek = 50;

$Pi = pi();


$Straal = $Omtrek / (2*$Pi); //Straal berekenen

$kwadraat = $Straal * $Straal;
$Oppervlakte = $Pi*$kwadraat;

$Diamater = 2 * $Straal;


echo "de omtrek is " .$Omtrek. "<br><br>";

echo "Pi= " .$Pi. "<br><br>";

echo "De straal= " .$Straal. "<br>";
echo "De oppervlakte= " .$Oppervlakte. "<br>";
echo "De diameter= " .$Diamater. "<br>";



?>