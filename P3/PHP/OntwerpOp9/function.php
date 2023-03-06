<?php 
//auteur: Noah
//functie alle function voor the main_bieren.php

function ConnectDB() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bieren";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
return $conn;
}

// function OVzBieren() {
//     echo "<table>";
//     echo "<tr>
//     <td><strong>Code:</strong></td>
//     <td><strong>Naam:</strong></td>
//     <td><strong>Soort:</strong></td>
//     <td><strong>Stijl:</strong></td>
//     <td><strong>Alcohol:</strong></td>
//     <td><strong>Brouwcode:</strong></td>
//     </tr>";
//     global $result;
//     foreach($result as $row) {
//         echo "<tr>";
//         echo "<td>". $row['biercode'] ."</td>";
//         echo "<td>". $row['naam'] ."</td>";
//         echo "<td>". $row['soort'] ."</td>";
//         echo "<td>". $row['stijl'] ."</td>";
//         echo "<td>". $row['alcohol'] ."</td>";
//         echo "<td>". $row['brouwcode'] ."</td>";
//         echo "</tr>";
//     }
//     echo "</table>";
// }

function OVzBieren($conn) {
    $stmt = $conn->prepare("SELECT * FROM bier"); 
    $stmt->execute();
    
    $result = $stmt->fetchAll();
    echo "<table>";
    echo "<tr>
    <td><strong>Code:</strong></td>
    <td><strong>Naam:</strong></td>
    <td><strong>Soort:</strong></td>
    <td><strong>Stijl:</strong></td>
    <td><strong>Alcohol:</strong></td>
    <td><strong>Brouwcode:</strong></td>
    </tr>";
    foreach($result as $row) {
        echo "<tr>";
        echo "<td>". $row['biercode'] ."</td>";
        echo "<td>". $row['naam'] ."</td>";
        echo "<td>". $row['soort'] ."</td>";
        echo "<td>". $row['stijl'] ."</td>";
        echo "<td>". $row['alcohol'] ."</td>";
        echo "<td>". $row['brouwcode'] ."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

function OVzBrouwers($conn) {
    $stmt = $conn->prepare("SELECT * FROM brouwer"); 
    $stmt->execute();
    
    $result = $stmt->fetchAll();
    echo "<table>";
    echo "<tr>
    <td><strong>Brouwcode:</strong></td>
    <td><strong>Naam:</strong></td>
    <td><strong>Land:</strong></td>
    </tr>";
    foreach($result as $row) {
        echo "<tr>";
        echo "<td>". $row['brouwcode'] ."</td>";
        echo "<td>". $row['naam'] ."</td>";
        echo "<td>". $row['land'] ."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

function GetData($table) {
    $conn = ConnectDB();
    $stmt = $conn->prepare("SELECT * FROM $table"); 
    $stmt->execute();
    
    $result = $stmt->fetchAll();
    return $result;
}

function PrintTable() {
    $result = GetData("bier");

    echo "<table>";
    foreach($result as $row) {
        echo "<tr><td>Rij </td>";
        foreach($row as $col) {
            echo "<td>$col</td>";
        }
    }
    echo "</table>";
}


?>

<style>
    table, tr, td {
        border: 1px solid black;
    }
</style>