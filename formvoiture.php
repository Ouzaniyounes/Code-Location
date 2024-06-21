<?php
        // error_reporting(E_ALL);
        ini_set('display_errors', 1);
        include("db.identifiants.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location de Voiture</title>
</head>
<body>

<?php 
    if(isset($_POST["submit"])) {
        if(!empty($_POST["ma"]) && !empty($_POST["marque"]) && !empty($_POST["Modele"]) && !empty($_POST["Cylindre"]) && !empty($_POST["Dateachat"])) {

            $Immatriculation = htmlspecialchars($_POST["ma"]);
            $marque = htmlspecialchars($_POST["marque"]);
            $Modele = htmlspecialchars($_POST["Modele"]);
            $Cylindre = htmlspecialchars($_POST["Cylindre"]);
            $Dateachat = htmlspecialchars($_POST["Dateachat"]);

            //  Ki ndekhel des donnes l base de donnes ndir query
            // Using named placeholders without extra spaces
            // hed methode wesemha aliase
            $req = $db->prepare("INSERT INTO Voiture (Immatriculation, Marque, Modele, Cylindre, dateAchat) VALUES (:Immatriculation, :Marque, :Modele, :Cylindre, :dateAchat)");
            $result = $req->execute([
                ":Immatriculation" => $Immatriculation,
                ":Marque" => $marque,
                ":Modele" => $Modele,
                ":Cylindre" => $Cylindre,
                ":dateAchat" => $Dateachat
            ]);

            if($result) {
                echo "Data inserted successfully!";
            } else {
                echo "Failed to insert data.";
                print_r($req->errorInfo()); // Debugging information
            }
        } else {
            echo "Please fill in all fields.";
        }
    }
?>

<form action="" method="post">
    <label for="ma">Immatriculation</label>
    <input type="text" name="ma" id="ma">
    <label for="marque">Marque</label>
    <input type="text" name="marque" id="marque">
    <label for="Modele">Modele</label>
    <input type="text" name="Modele" id="Modele">
    <label for="Cylindre">Cylindre</label>
    <input type="text" name="Cylindre" id="Cylindre">
    <label for="Dateachat">Date d'achat</label>
    <input type="date" name="Dateachat" id="Dateachat">
    <input type="submit" name="submit" value="Submit">
</form>

<h1> <a href="affichageVoiture.php"> Affichier Voiture </a></h1>

</body>
</html>
