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
<div class="upauto2">
<h1>Welke klant zoekt u</h1>
<p>Dit zijn alle gegevens uit de databaae over uw klant</p>

<?php

$klantid = $_POST["klantidvak"];


require_once "Gar-Con.php";

$autoupdate = $conn->prepare("SELECT * FROM auto WHERE id = :klantid");
$autoupdate->execute(["klantid" => $klantid]);



echo "<form action='Garage-update-auto3.php' method='post'>";
foreach ($autoupdate as $auto) {
    echo "id:" . $auto["id"];
    echo "<input type='hidden' name='klantidvak' ";
    echo "value= '" . $auto["id"] . " '> <br> ";

    echo "autokenteken: <input type='text' ";
    echo "name = 'autokentekenvak' ";
    echo "value = '" . $auto["autokenteken"] . "' ";
    echo "> <br>";

    echo "automerk: <input type='text' ";
    echo "name = 'automerkvak' ";
    echo "value = '" . $auto["automerk"] . "' ";
    echo "> <br>";

    echo "autotype: <input type='text' ";
    echo "name = 'autotypevak' ";
    echo "value = '" . $auto["autotype"] . "' ";
    echo "> <br>";

    echo "autokmstand: <input type='text' ";
    echo "name = 'autokmstandvak' ";
    echo "value = '" . $auto["autokmstand"] . "' ";
    echo "> <br>";
}
echo "<input type='submit'>";
echo "</form>";



?>
</div>
</body>
</html>
