<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">

    <title>create_2.0</title>
</head>
<body>
<div class="create-2_0">


<?php

$kenteken = $_POST["autokenteken"];
$automerk = $_POST["automerk"];
$autotype = $_POST["autotype"];
$autokmstand = $_POST["autokmstand"];
$id = $_POST["klantid"];
$image = $_FILES['image']['name'];

require_once "Gar-Con.php";

$insertauto = $conn->prepare("INSERT INTO auto (autokenteken, automerk, autotype ,autokmstand, klant_id) VALUES (:autokenteken, :automerk, :autotype, :autokmstand, :klant_id)");
$insertauto->bindParam(":autokenteken", $kenteken);
$insertauto->bindParam(":automerk", $automerk);
$insertauto->bindParam(":autotype", $autotype);
$insertauto->bindParam(":autokmstand", $autokmstand);
$insertauto->bindParam(":klant_id", $id);
$insertauto->execute();
$klanten = $insertauto->fetchAll(PDO::FETCH_ASSOC);



    echo "de auto is toegevoegd";

echo "<br/><br/><a href=../Garage_menu.html>Ga terug naar het menu</a>";

if (isset($_POST['submit'])) {
    $autoid = NULL;
    $autokenteken = $_POST ["autokenteken"];
    $automerk = $_POST["automerk"];
    $autotype = $_POST["autotype"];
    $autokmstand = $_POST["autokmstand"];
    $klantid = $_POST["klantid"];
    $image = $_FILES['image']['name'];
// auto gegevens invoeren
    require_once "Gar-Con.php";
    $sql = $conn->prepare("insert into auto VALUES (:autoid, :autokenteken, :automerk, :autotype, :autokmstand, '$image',  :klantid)");
    $sql->bindParam(":autoid", $autoid);
    $sql->bindParam(":autokenteken", $autokenteken);
    $sql->bindParam(":automerk", $automerk);
    $sql->bindParam(":autotype", $autotype);
    $sql->bindParam(":autokmstand", $autokmstand);
    $sql->bindParam(":klantid", $klantid);
    $sql->execute();

    $target = "uploads/" . basename($image);

    $sql = "INSERT INTO auto (image) VALUES ('$image')";

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }
}
echo "de auto is toegevoegd <br>";
echo "<a href='../Garage_menu.html'> terug naar het menu </a>"


?>
</div>
</body>
</html>
