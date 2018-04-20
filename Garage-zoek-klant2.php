<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">

    <title>Zoeken</title>
</head>
<body>
<div class="zoekkl2">
<h1>Alle uw klant</h1>
<p>Dit zijn alle gegevens uit de databaae over uw klant</p>

<?php

$klantid = $_POST["klantidvak"];

require_once "Gar-Con.php";

$selectzoek = $conn->prepare("SELECT * FROM klant WHERE id = :klantid");
$selectzoek->execute(["klantid" => $klantid]);

echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Naam</th>";
echo "<th>Adres</th>";
echo "<th>Postcode</th>";
echo "<th>Plaats</th>";
echo "</tr>";
foreach ($selectzoek as $rij)
{
    echo "<tr>";
    echo "<td>" . $rij["id"] . "</td>";
    echo "<td>" . $rij["klantnaam"] . "</td>";
    echo "<td>" . $rij["klantadres"] . "</td>";
    echo "<td>" . $rij["klantpostcode"] . "</td>";
    echo "<td>" . $rij["klantplaats"] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='../Garage_menu.html'>Ga terug naar het menu</a>";
?>
</div>
</body>
</html>
