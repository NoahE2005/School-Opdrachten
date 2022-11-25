<?php 
$Omtrek = 50;

$Pi = pi();


$Straal = $Omtrek / (2*$Pi); //Straal berekenen

$kwadraat = $Straal * $Straal;
$Oppervlakte = $Pi*$kwadraat;

$Diamater = 2 * $Straal;



echo $pi. "<br>";

echo "de omtrek is" .$Omtrek. "<br>";

echo "De straal= " .$Straal. "<br><br>";
echo "De oppervlakte= " .$Oppervlakte. "<br><br>";
echo "De diameter= " .$Diamater. "<br><br>";



?>