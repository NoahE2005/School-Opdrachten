<?php 

class product 
{
    public $naam;
    function set_name($naam) {
        $this->naam = $naam;
      }
    public $kleur = "rood";
    public $prijs = "4,99";
    public $grootte = "15 x 5 x 5";
}
$product = new Product();

$product->set_name("Fles");


echo "Naam: " . $product->naam;
echo "<br>";
echo "Kleur: " . $product->kleur;
echo "<br>";
echo "Prijs: " . $product->prijs;
echo "<br>";
echo "Grootte: " . $product->grootte;
echo "<br>";

?>