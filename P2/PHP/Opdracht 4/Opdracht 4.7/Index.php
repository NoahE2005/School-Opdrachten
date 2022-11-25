<?php 
$Spaargeld = 800;
$Totaalkost = 1000;
$TotaalMin250 = $Totaalkost - 250 ;
$MissendGeld = $Totaalkost - $Spaargeld;

if ($Spaargeld > $Totaalkost) {
    echo "U kan de telefoon kopen";
}
elseif ($Spaargeld > $TotaalMin250) {
    echo "U heeft de telefoon bijna, u moet nog " .$MissendGeld. " euro verdienen";
}
elseif ($Spaargeld < $TotaalMin250) {
    echo "U moet een baantje krijgen, u moet nog" .$MissendGeld. " euro verdienen";
}

?>