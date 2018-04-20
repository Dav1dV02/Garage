<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">

    <title>Garage</title>
</head>
<body>
<div class="delkl2">
<h1>Welke klant wilt u verwijderen</h1>

<?php

$klantid = $_POST["klantidvak"];


require_once "Gar-Con.php";

$Klantendelete = $conn->prepare("SELECT * FROM klant WHERE id = :klantid");
$Klantendelete->execute(["klantid" => $klantid]);
$rij = $Klantendelete->fetch(PDO::FETCH_ASSOC);


echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Naam</th>";
echo "<th>Adres</th>";
echo "<th>Postcode</th>";
echo "<th>Plaats</th>";
echo "</tr>";
    echo "<tr>";
    echo "<td>" . $rij["id"] . "</td>";
    echo "<td>" . $rij["klantnaam"] . "</td>";
    echo "<td>" . $rij["klantadres"] . "</td>";
    echo "<td>" . $rij["klantpostcode"] . "</td>";
    echo "<td>" . $rij["klantplaats"] . "</td>";
    echo "</tr>";
echo "</table><br>";

echo "<form action='Garage-delete-klant3.php' method='post'>";
echo "<input type='hidden' name='klantidvak' value='$klantid'>";
echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";
echo "verwijder deze klant<br><br>";
echo "<input type='submit'>";
echo "</form>";
?>


</div>
</body>
</html>
