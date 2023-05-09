<?php 
class Product 
{
    public $name = "";
    public $price = "";
    public $category = "";
    public $currency = "$";

    function __construct($name, $price, $category) {
        $this->name = ucfirst($name);
        //$this->price = $price;
        $this->category = ucfirst($category);

        $this->price = $this->currency . " " . $price;
    }
}

$Product = new Product("casis", "1,10", "blikje");


echo "Naam: " . $Product->name;
echo "<br>";
echo "Prijs: " . $Product->price;
echo "<br>";
echo "category: " . $Product->category;
echo "<br>";

?>