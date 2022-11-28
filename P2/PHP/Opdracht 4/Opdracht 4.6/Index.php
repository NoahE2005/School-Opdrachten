<?php 
$tijd = Date('H');
$temperatuur = 25;
$luchtvochtigheid = 45;

if ($tijd > 17 || $temperatuur < 20 && $luchtvochtigheid < 85) {
    echo "De airco is uit";
}
else {
    echo "De airco is aan";
}


?>