
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jour09";

$conn = mysqli_connect( $servername, $username, $password, $dbname);

echo "connexion reussi";
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
                <th>informations salles</th>
                <th>nom de salle</th>
                <th>capacite</th>
                <th>id etage</th>
            </tr>
        </thead>
        <tbody>
            <?php

        mysqli_select_db($conn, $dbname);
        $sql = "SELECT * FROM salles ORDER BY capacite DESC";
         $result = mysqli_query($conn, $sql);
             if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<th>" . $row ["id"] . "</th>";
                    echo "<th>" . $row ["nom"] . "</th>";
                    echo "<th>" . $row ["id_etage"] ."</th>";
                    echo "<th>" . $row["capacite"] . "</th>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</body>
</html>