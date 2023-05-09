<?php 

class product 
{
    public $naam;
    function set_name($naam) {
        $this->naam = $naam;
      }
    public $kleur = "rood";
    public $prijs = "4,99";

    function FormatPrice() {
      return $this->prijs;
    }
    public $grootte = "15 x 5 x 5";
}
$product = new product();

$product->set_name("Fles");


echo "Naam: " . $product->naam;
echo "<br>";
echo "Kleur: " . $product->kleur;
echo "<br>";
echo "Prijs: " . $product->FormatPrice();
echo "<br>";
echo "Grootte: " . $product->grootte;
echo "<br>";

?>