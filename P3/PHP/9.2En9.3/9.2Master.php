<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
    $query = $db->prepare("SELECT * FROM fietsen");
    $query->execute();
    $result = $query->fetchAll (PDO::FETCH_ASSOC);
    foreach ($result as &$data){
        echo "<a href='detailpagina.php?id=" . $data['id'] . "'>";
            echo $data["merk"] . " " . $data["type"];
        echo "</a>";
        echo "<br>";
    }
}   

catch(PDOException $e) {
    die("Error!: " . $e->getMessage());
}

?>
<html>
<style type="text/css">
    table {
        border-collapse: collapse;
        border: 1px solid black;
    }
    td {
        border: 1px solid black;
        width: 100px;
    }
</style>
</html>
