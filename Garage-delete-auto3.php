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
<div class="del3">
<h1>Klanten gegevens aanpassen</h1>
<?php

$klantid =$_POST["klantidvak"];
$verwijderen =$_POST["verwijdervak"];

if ($verwijderen)
{
    require_once "Gar-Con.php";

    $klantverwijderen = $conn->prepare("DELETE FROM auto WHERE id = :klantid");
    $klantverwijderen->execute(["klantid" => $klantid]);
    echo "gegevens zijn verwijderd";
}else{
    echo "er is iets mis gegaan de gegevens zijn niet verwijdered";
}
echo "<br> <br>";
echo "<a href='../Garage_menu.html'>Ga terug naar het menu</a>";
?>
</div>
</body>
</html>
