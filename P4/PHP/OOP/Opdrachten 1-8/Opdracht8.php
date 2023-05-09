<?php 
class Product 
{
    public $name = "";
    public $price = "";
    public $category = "";
    public $currency = "";

    function __construct($name, $currency, $price, $category = "Spel") 
    {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->category = ucfirst($category);
        $this->currency = $currency;
    }

    public function GetProduct() {
        return $this->name . ". Kost: " . $this->currency . $this->price;
    }
}

$Product1 = new Product($name = "Techo beats", $currency = "€", $price = "2");
echo $Product1->GetProduct();

echo "<br>";

$Product2 = new Product($name = "Geometry dash", $currency = "€", $price = "4.99");
echo $Product2->GetProduct();

echo "<br>";

$Product3 = new Product($name = "Minesweeper", $currency = "€", $price = "0.99");
echo $Product3->GetProduct();

echo "<br>";

$Product4 = new Product($name = "Chess", $currency = "€", $price = "15.99");
echo $Product4->GetProduct();
?>