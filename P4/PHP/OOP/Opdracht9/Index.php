<?php 
Require_once 'Music.php';

//$music1 = new Music($name = 'Bach', $genre = 'Klassiek', $listen = 3);
$music1 = new Music(name: 'Bach', genre: 'Klassiek', listen: 3);
echo $music1->getName() . " ";
var_dump($music1);

echo "<br>";

$music1 = new Music(name: 'Beethoven', genre: 'Klassiek', listen: 453421);
echo $music1->getName() . " ";
var_dump($music1);
?>