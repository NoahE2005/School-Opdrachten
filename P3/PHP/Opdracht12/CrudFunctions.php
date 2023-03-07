<?php 
//auteur: Noah

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
function GetData($table) {
    $conn = ConnectDB();
    $stmt = $conn->prepare("SELECT * FROM $table"); 
    $stmt->execute();
    
    $result = $stmt->fetchAll();
    return $result;
}

function PrintTable() {
    $result = GetData("bier");

    echo "
    <form method='post'>
    <input type='submit' name='toevoegen' value='Toevoegen'>
    </form>
    ";
    echo "<table>";
    foreach($result as $row) {
        echo "<tr><td>Rij </td>";
        foreach($row as $col) {
            echo "<td>$col</td>";
        }
        echo "<td>
        <form method='post'>
        <input type='submit' name='wijzigen' value='Wijzigen'>
        </form>
        </td>
        <td>
        <form method='post'>
        <input type='submit' name='verwijderen' value='Verwijderen'>
        </form>
        </td>
              </tr>";
    }
    echo "</table>";
}


?>

<style>
    table, tr, td {
        border: 1px solid black;
    }
</style>

<?php 
echo "<h1>CRUD Tabel</h1>";
PrintTable();

?>