<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">

    <title>Read</title>
</head>
<body><div class="readonly3">
<h1>Alle uw klant</h1>
<p>Dit zijn alle gegevens uit de databaae over uw klanten</p>

<?php

require_once "Gar-Con.php";

$select = $conn->prepare("SELECT * FROM klant");
$select->execute();

echo "<table>";
echo "<tr>";
echo "<th>ID<th>";
echo "<th>Naam<th>";
echo "<th>Adres<th>";
echo "<th>Postcode<th>";
echo "<th>Plaats<th>";
echo "</tr>";
foreach ($select as $rij)
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
echo "<br/><br/><a href='Garage-read-home.php'>Ga terug naar het menu</a>";
?>
</div>
</body>
</html>
