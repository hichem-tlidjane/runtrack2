<!-- En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, sélectionnez récupérer le nom des salles et le nom de leur étage. Affichez le
résultat de cette requête dans un tableau html. La première ligne de votre tableau html
doit contenir le nom des champs. Les suivantes doivent contenir les données présentes
dans votre base de données. -->



<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jour09";

$conn = mysqli_connect($servername, $username, $password, $dbname);

echo "connexion reussie";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
     <table>
        <thead>
            <tr>
                <th>noms des salles</th>
                <th>etage</th>
            </tr>
        </thead>
        <tbody>
            <?php
            mysqli_select_db($conn, $dbname);
            $sql = "SELECT salles.nom AS nom_salle, etage.nom AS nom_etage FROM salles JOIN etage ON salles.id_etage = etage.id";
            $result = mysqli_query($conn, $sql);
             if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["nom_salle"] . "</td>";
                    echo "<td>" . $row["nom_etage"]. "</td>";
                    // var_dump(value: $row);
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</body>
</html>
