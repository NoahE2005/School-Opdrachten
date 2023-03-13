<?php 
include 'CrudFunctions.php';

$biercode = $_GET['biercode'];

$result = GetData("bier");

$naam = [];
$soort = [];
$stijl = [];
$alcohol = [];
$brouwcode = [];

foreach($result as $row) { //Database info toevoegen aan alle Arrays
    array_push($naam, $row['naam']);
    array_push($soort, $row['soort']);
    array_push($stijl, $row['stijl']);
    array_push($alcohol, $row['alcohol']);
    array_push($brouwcode, $row['brouwcode']);
}
?>

<html>
    <form>
        Biercode:<input tpye="text" name="biercode" value="<?php echo $biercode ?>">

        <br>

        Naam:<input tpye="text" name="naam" value="<?php echo $naam[$biercode] ?>">

        <br>
        
        Soort:<input tpye="text" name="soort" value="<?php echo $soort[$biercode] ?>">
        
        <br>
        
        Stijl:<input tpye="text" name="stijl" value="<?php echo $stijl[$biercode] ?>">
        
        <br>
        
        Alcohol:<input tpye="text" name="alcohol" value="<?php echo $alcohol[$biercode] ?>">
        
        <br>
        
        Brouwcode:<input tpye="text" name="brouwcode" value="<?php echo $brouwcode[$biercode] ?>">

        <br><br>

        <input type="submit">
    </form>
</html>