<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">

    <title>inlog_2.0</title>
</head>
<body>
<div class="inlog2">



<?php

$Username = $_POST["username"];
$Password = $_POST["password"];



require_once "Gar-Con.php";

$sql = $conn->prepare("SELECT  * FROM    inlog");
$sql->execute();
$results = $sql->fetchAll(PDO::FETCH_ASSOC);
$gevonden = false;




foreach ($results as $rij)
    {
        if ($Username == $rij["username"])
            {
                if ($Password == $rij["password"])

                    {
                        if($rij["rollen_id"] == 1 OR $rij["rollen_id"] == 2){
                            $_SESSION['admin'] = true;
                        }
                        if($rij["rollen_id"] == 3 OR $rij["rollen_id"] == 4){
                            $_SESSION['users'] = true;
                        }

                        $gevonden = true;
                    }
    }
}
    if ($gevonden === true) {
        echo("Welkom terug " . $Username . " ");
        $_SESSION['ingelogd'] = true;
//    }
//    if ($_SESSION === true)
//    {
//
//        header("location:../Garage_menu");
}else{
    echo ("Uw heeft de foute gegevens ingevuld");
    session_destroy();
}
?>
</div>
</body>
</html>