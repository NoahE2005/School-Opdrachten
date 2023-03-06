<?php 
//auteur: Noah
//alle bieren te laten zien en verbinden met database

// Initialisatie
include 'function.php';

//Main

// Connect to database
$conn = ConnectDB();
//Print bieren
// OVzBieren($conn);

// echo "<br><br>";

// //Print brouwers
// OVzBrouwers($conn);

//Print alles
PrintTable();
?>