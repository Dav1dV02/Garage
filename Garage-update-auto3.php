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
<div class="upauto3">
<h1>Klanten gegevens aanpassen</h1>
<?php

$klantid = $_POST["klantidvak"];
$Kenteken = $_POST["autokentekenvak"];
$automerk = $_POST["automerkvak"];
$autotype = $_POST["autotypevak"];
$autokmstand = $_POST["autokmstandvak"];

if (empty($_POST['klantidvak'])){
    echo "de klant bestaat niet";
    echo "<a href='../Garage_menu.html'> terug naar het menu </a>";
}
require_once "Gar-Con.php";

$selectzoek = $conn->prepare("UPDATE AUTO SET
autokenteken = :autokenteken,
automerk = :automerk,
autotype = :autotype,
autokmstand = :autokmstand
WHERE id = :id");
$selectzoek->execute([
    "id" => $klantid,
    "autokenteken" => $Kenteken,
    "automerk" => $automerk,
    "autotype" => $autotype,
    "autokmstand" => $autokmstand
]);

echo "Uw Veranderingen zijn toegepast <br> <br>";
echo "<a href='../Garage_menu.html'>Ga terug naar het menu</a>";
?>
</div>
</body>
</html>
