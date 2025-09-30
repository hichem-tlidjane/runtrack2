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
        $sql = "SELECT * FROM etudiants WHERE naissance > DATE_SUB(CURDATE(), INTERVAL 18 YEAR)";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<th>" . $row["prenom"] . "</th>";
                echo "<th>" . $row["nom"] . "</th>";
                echo "<th>" . $row["naissance"] . "</th>";
                echo "<th>" . $row["sexe"] . "</th>";
                echo "<th>" . $row["email"] . "</th>";
            }
        }
        ?>
    </tbody>
</html>