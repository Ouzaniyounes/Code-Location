<?php 
        ini_set('display_errors', 1);
        include("db.identifiants.php");

        // Ki mandekhelch des donnes l base de donnes ndir query
        $data = $db -> query ( "select * from Voiture ");

        // echo "<table>";
        // echo "<tr>";
        // echo "<th>";
        // echo "</tr>";
        // echo "</table>";
        echo "
            <table border='1'>
                <tr>
                    <th> Immatriculation </th>
                    <th> Marque </th>
                    <th> Modele </th>
                    <th> Cylindre </th>
                    <th> dateAchat</th>

                </tr>
            
            ";
        while($result = $data->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($result["Immatriculation"]) . "</td>";
            echo "<td>" . htmlspecialchars($result["Marque"]) . "</td>";
            echo "<td>" . htmlspecialchars($result["Modele"]) . "</td>";
            echo "<td>" . htmlspecialchars($result["Cylindre"]) . "</td>";
            echo "<td>" . htmlspecialchars($result["dateAchat"]) . "</td>";
            echo "</tr>";
        }
        echo"</table>";


        
        


?>