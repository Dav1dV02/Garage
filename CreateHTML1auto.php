<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Create</title>
</head>
<body>
<div class="crauto">
<form action="Createphp2%20auto.php" method="post">
    <fieldset>
        <legend>Maak nieuwe auto aan</legend>
        <label for="autokenteken">Kenteken</label>
        <br/>
        <input id="autokenteken" type="text" name="autokenteken">
        <br/>
        <label for="automerk">Automerk</label>
        <br/>
        <input id="automerk" type="text" name="automerk">
        <br/>
        <label for="autotype">type</label>
        <br/>
        <input id="autotype" type="text" name="autotype">
        <br/>
        <label for="autokmstand">km-stand</label>
        <br/>
        <input id="autokmstand" type="text" name="autokmstand">
        <br/>
        <label for="fileToUpload">upload foto</label>
        <br/>
        <input type="file" name="image" id="fileToUpload">
        <br/>
        <?php
        require_once "Gar-Con.php";
        $selectKlant = $conn->prepare("SELECT * FROM klant");
        $selectKlant->execute();
        $klanten = $selectKlant->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <br/>
        <select name="klantid" id="klant">

            <?php
            foreach ($klanten as $klant) {
                ?>
            <option value="<?php echo $klant['id'];?>"><?php echo $klant['klantnaam'];?></option>
            <?php
            }
?>
        </select>
        <br/>
        <br/>
        <input type="submit" name="submit" id="submit" value="Verstuur">

    </fieldset>
</form>
</div>
</body>
</html>