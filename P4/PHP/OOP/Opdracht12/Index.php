<?php 
declare(strict_types=1);
Require_once 'Music.php';
require_once 'ListenList.php';

$listen = new ListenList();

//$music1 = new Music($name = 'Bach', $genre = 'Klassiek', $listen = 3);
$music1 = new Music(name: 'Bach', genre: 'Klassiek', listen: $list[0]);
echo $music1->getName() . " ";
var_dump($music1);

echo "<br>";

$music2 = new Music(name: 'Beethoven', genre: 'Klassiek', listen: $list[1]);
echo $music2->getName() . " ";
var_dump($music2);

$listen->AddMusic($music1);
$listen->AddMusic($music2);
?>