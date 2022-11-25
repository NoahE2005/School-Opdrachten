<?php 
$spaargeld = 600;

if ($spaargeld > 1000) {
    echo "U kan de telefoon kopen";
}
elseif ($spaargeld > 750) {
    echo "U heeft de telefoon bijna, u moet nog" .$spaargeld. " euro verdienen";
}
elseif ($spaargeld < 750) {
    echo "U moet een baantje krijgen, u moet nog" .$spaargeld. " euro verdienen";
}


?>