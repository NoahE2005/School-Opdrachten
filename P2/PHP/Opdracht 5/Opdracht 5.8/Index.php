<?php 
$leeftijd = 19;
$HeeftStemPas = false;

if ($leeftijd > 16) {
    echo "Je mag je scooter rijbewijs halen";
}

echo "<br><br>";

if ($leeftijd > 18 && $HeeftStemPas) {
    echo "Je mag stemmen";
}
else {
    echo "Je mag niet stemmen";
}

?>