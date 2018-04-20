<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">

    <title>Document</title>
</head>
<body>
<div class="createkl">


<?php

$Klantid = NULL;
$Naam = $_POST["Naam"];
$Adres = $_POST["Adres"];
$Poscode = $_POST["Postcode"];
$Plaats = $_POST["Plaats"];

require_once "Gar-Con.php";

$selectKlant = $conn->prepare("SELECT  * FROM   klant");
$selectKlant->execute();
$results = $selectKlant->fetchAll(PDO::FETCH_ASSOC);

$insertKlant = $conn->prepare("INSERT INTO klant (klantnaam, klantadres, klantpostcode, klantplaats) VALUES (:klantnaam, :klantadres, :klantpostcode, :klantplaats)");
$insertKlant->bindParam(":klantnaam", $Naam);
$insertKlant->bindParam(":klantadres", $Adres);
$insertKlant->bindParam(":klantpostcode", $Poscode);
$insertKlant->bindParam(":klantplaats", $Plaats);
$insertKlant->execute();


    echo "de klant is toegevoegd";

    echo "<br/><br/><a href=../Garage_menu.html>Ga terug naar het menu</a>";

?>
</div>
</body>
</html>
