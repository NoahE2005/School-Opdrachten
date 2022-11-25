<?php 
$min = 1;
$max = 9;

echo (rand(1,9)),(rand(1,9)),(rand(1,9)),(rand(1,9));

$n = 10;
function getRandomString($n)
{
  $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $randomString = '';

  for ($i = 0; $i < 2; $i++) {
    $index = rand(0, strlen($characters) - 1);
    $randomString .= $characters[$index];
  }

  return $randomString;
}

echo " ";

echo getRandomString( $n);

?>