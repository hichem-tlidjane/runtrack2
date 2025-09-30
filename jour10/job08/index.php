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
                <th>superficie_totale</th>
            </tr>
        </thead>
        <tbody>
            <?php
            mysqli_select_db($conn, $dbname);
            $sql = "SELECT SUM(capacite) AS capacite_totale FROM salles";
            $result = mysqli_query($conn, $sql);
             if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<th>" . $row["capacite_totale"] . "</th>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</body>
</html>