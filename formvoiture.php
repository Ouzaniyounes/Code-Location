<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

    if(isset($_POST["submit"])) {
        if(isset($_POST["ma"]) && isset($_POST["marque"]) && isset($_POST["Cylindre"]) && isset($_POST["Dateachat"])) {

        }
    }


?>
<form action="" method="post" >
        <label for=""> Imatriculation</label>
        <input type="text" name="ma">
        <label for=""> marque </label>
        <input type="text" name="marque">
        <label for=""> Cylindre</label>
        <input type="text" name="Cylindre">
        <label for=""> Dateachat </label>
        <input type="text" name="Dateachat">
        <input type="submit" name="submit" id="">
    </form>
</body>
</html>