<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">

    <title>Update</title>
</head>
<body>
<div class="upkl2">
<h1>Welke klant zoekt u</h1>
<p>Dit zijn alle gegevens uit de databaae over uw klant</p>

<?php

$klantid = $_POST["klantidvak"];


require_once "Gar-Con.php";

$Klantenupdate = $conn->prepare("SELECT * FROM klant WHERE id = :klantid");
$Klantenupdate->execute(["klantid" => $klantid]);



echo "<form action='Garage-update-klant3.php' method='post'>";
foreach ($Klantenupdate as $klant) {
    echo "klantid:" . $klant["id"];
    echo "<input type='hidden' name='klantidvak' ";
    echo "value=' " . $klant["id"] . " '> <br> ";

    echo "klantnaam: <input type='text' ";
    echo "name = 'klantnaamvak' ";
    echo "value = '" . $klant["klantnaam"] . "' ";
    echo "> <br>";

    echo "klantadres: <input type='text' ";
    echo "name = 'klantadresvak' ";
    echo "value = '" . $klant["klantadres"] . "' ";
    echo "> <br>";

    echo "klantpostcode: <input type='text' ";
    echo "name = 'klantpostcodevak' ";
    echo "value = '" . $klant["klantpostcode"] . "' ";
    echo "> <br>";

    echo "klantplaats: <input type='text' ";
    echo "name = 'klantplaatsvak' ";
    echo "value = '" . $klant["klantplaats"] . "' ";
    echo "> <br>";
}
echo "<input type='submit'>";
echo "</form>";



?>
</div>
</body>
</html>
