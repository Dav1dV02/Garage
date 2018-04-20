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
<body>
<div class="readauto">
<h1>Alle uw klant</h1>
<p>Dit zijn alle gegevens uit de databaae over uw klanten</p>

<?php

require_once "Gar-Con.php";

$select = $conn->prepare("SELECT * FROM auto");
$select->execute();

echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Kenteken</th>";
echo "<th>Merk</th>";
echo "<th>Type</th>";
echo "<th>Km-stand</th>";
echo "</tr>";

foreach ($select as $rij)
{
    echo "<tr>";
    echo "<td>" . $rij["klant_id"] . "</td>";
    echo "<td>" . $rij["autokenteken"] . "</td>";
    echo "<td>" . $rij["automerk"] . "</td>";
    echo "<td>" . $rij["autotype"] . "</td>";
    echo "<td>" . $rij["autokmstand"] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<br/><br/><a href='../Garage_menu.html'>Ga terug naar het menu</a>";
?>
</div>
</body>
</html>
