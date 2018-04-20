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
<div class="zoek2">
<h1>Alle uw klant</h1>
<p>Dit zijn alle gegevens uit de databaae over uw klant</p>

<?php

$klantid = $_POST["klantidvak"];

require_once "Gar-Con.php";

$selectzoek = $conn->prepare("SELECT * FROM auto WHERE id = :klantid");
$selectzoek->execute(["klantid" => $klantid]);

echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Kenteken</th>";
echo "<th>Merk</th>";
echo "<th>Type</th>";
echo "<th>Km-stand</th>";
echo "</tr>";
foreach ($selectzoek as $rij)
{
    echo "<tr>";
    echo "<td>" . $rij["id"] . "</td>";
    echo "<td>" . $rij["autokenteken"] . "</td>";
    echo "<td>" . $rij["automerk"] . "</td>";
    echo "<td>" . $rij["autotype"] . "</td>";
    echo "<td>" . $rij["autokmstand"] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='../Garage_menu.html'>Ga terug naar het menu</a>";
?>
</div>
</body>
</html>
