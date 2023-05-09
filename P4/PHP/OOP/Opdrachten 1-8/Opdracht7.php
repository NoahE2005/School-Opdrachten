<?php 
class Product 
{
    function __construct(public $name = "Naam spel", public $price = "15.99", public $category = "FPS", public $currency = "€") 
    {
        $this->name = ucfirst($name);
        //$this->price = $price;
        $this->category = ucfirst($category);

        $this->price = $this->currency . " " . $price;
    }
}

$Product = new Product("minecraft", "19.99", "sandbox", "$");

echo "<h3>Naam: " . $Product->name . "</h3>";
echo "Prijs: " . $Product->price;
echo "<br>";
echo "category: " . $Product->category;
echo "<br><br><br>";

$Product2 = new Product("Tetris", "4.99", "puzzle", "$");

echo "<h3>Naam: " . $Product2->name . "</h3>";
echo "Prijs: " . $Product2->price;
echo "<br>";
echo "category: " . $Product2->category;
echo "<br><br><br>";

$Product3 = new Product("Garry's mod", "9.99", "sandbox", "$");

echo "<h3>Naam: " . $Product3->name . "</h3>";
echo "Prijs: " . $Product3->price;
echo "<br>";
echo "category: " . $Product3->category;
echo "<br><br><br>";

?>