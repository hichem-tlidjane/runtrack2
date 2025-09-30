<!-- En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, récupérez l’ensemble des informations des étudiants dont prenom commence par
un “T”. Affichez le résultat de cette requête dans un tableau html. La première ligne de
votre tableau html doit contenir le nom des champs. Les suivantes doivent contenir les
données présentes dans votre base de données. -->

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jour09";

$conn = mysqli_connect($servername, $username, $password, $dbname);

echo "connexion reussie";
?>

<!DOCTYPE html>
<html lang="en">

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
                <th>prenom</th>
                <th>nom</th>
                <th>naissance</th>
                <th>sexe</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            mysqli_select_db($conn, $dbname);
            $sql = "SELECT * FROM etudiants WHERE prenom LIKE 'T%'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<th>" . $row["prenom"] . "</th>";
                    echo "<th>" . $row["nom"] . "</th>";
                    echo "<th>" . $row["naissance"] . "</th>";
                    echo "<th>" . $row["sexe"] . "</th>";
                    echo "<th>" . $row["email"] . "</th>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
</html>