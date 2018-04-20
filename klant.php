<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-join-auto</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="auto-klant">
<h1>garage join auto</h1>
<p>dit zijn alle gegevens uit de tabel auto en klant van de database garage</p>

<?php
require_once "Gar-Con.php";

$selectall = $conn->prepare("SELECT klant.klantnaam, auto.autokenteken, auto.automerk, auto.autotype, auto.autokmstand, auto.id FROM klant JOIN auto on klant.id = auto.id ");

$selectall->execute();

echo "<table>";
echo "<tr>";
echo "<th>Naam</th>";
echo "<th>Kenteken</th>";
echo "<th>Merk</th>";
echo "<th>Type</th>";
echo "<th>Km-stand</th>";
echo "<th>Id</th>";
echo "</tr>";
foreach ($selectall as $rij)
{
    echo "<tr>";
    echo "<td>" . $rij["klantnaam"] . "</td>";
    echo "<td>" . $rij["autokenteken"] . "</td>";
    echo "<td>" . $rij["automerk"] . "</td>";
    echo "<td>" . $rij["autotype"] . "</td>";
    echo "<td>" . $rij["autokmstand"] . "</td>";
    echo "<td>" . $rij["id"] . "</td>";

    echo "</tr>";
}
echo "</table>";
echo "<a href='../Garage_menu.html'> terug naar het menu </a>";
?>
</div>
</body>
</html>