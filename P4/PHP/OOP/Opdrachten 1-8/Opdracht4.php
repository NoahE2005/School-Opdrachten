<?php 
class Blikje
{
    public $name = "";
    public $price = "";
    public $category = "";

    function Set_Name($object, $string) {
        return $object = $string;
    }

}

$Product = new Blikje();

$Product->name = $Product->Set_Name($Product->name, "cola");
$Product->price = $Product->Set_Name($Product->price, "0,99");
$Product->category = $Product->Set_Name($Product->category, "blikje");

$Product->name = ucfirst($Product->name);
$Product->price = ucfirst($Product->price);
$Product->category = strtoupper($Product->category);

echo "Naam: " . $Product->name;
echo "<br>";
echo "Prijs: " . $Product->price;
echo "<br>";
echo "category: " . $Product->category;
echo "<br>";

?>