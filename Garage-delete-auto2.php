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
<div class="delauto2">
<h1>Welke klant wilt u verwijderen</h1>

<?php

$klantid = $_POST["klantidvak"];


require_once "Gar-Con.php";

$Autodelete = $conn->prepare("SELECT * FROM auto WHERE id = :klantid");
$Autodelete->execute(["klantid" => $klantid]);
$rij = $Autodelete->fetch(PDO::FETCH_ASSOC);


echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Kenteken</th>";
echo "<th>Merk</th>";
echo "<th>Type</th>";
echo "<th>Km-stand</th>";
echo "</tr>";
echo"<tr>";
    echo "<tr>";
    echo "<td>" . $rij["id"] . "</td>";
    echo "<td>" . $rij["autokenteken"] . "</td>";
    echo "<td>" . $rij["automerk"] . "</td>";
    echo "<td>" . $rij["autotype"] . "</td>";
    echo "<td>" . $rij["autokmstand"] . "</td>";
    echo "</tr>";
echo "</table><br>";

echo "<form action='Garage-delete-auto3.php' method='post'>";
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
