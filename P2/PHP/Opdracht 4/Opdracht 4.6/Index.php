<?php 
$tijd = Date('H');
$temperatuur = 20;
$luchtvochtigheid = 60;

if ($tijd <17 || $temperatuur < 20 || $luchtvochtigheid < 85) {
    echo "De airco is aan";
}
else {
    echo "De airco is uit";
}


?>