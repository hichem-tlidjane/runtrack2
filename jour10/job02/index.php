<!-- En utilisant php et mysqli, connectez-vous à la base de données “jour09”. A l’aide d’une
requête SQL, récupérez le nom et la capacité de chacune des salles. Affichez le résultat
de cette requête dans un tableau html. La première ligne de votre tableau html doit
contenir le nom des champs. Les suivantes doivent contenir les données présentes
dans votre base de données. -->

   <?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "jour09";

   $conn = mysqli_connect($servername,$username,$password,$dbname);
    echo "connexion reussie";

    $sql = "SELECT nom, capacite FROM salles";
    $result = mysqli_query($conn, $sql);
   ?>
<!DOCTYPE html>
<html lang="fr">    
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Capacité</th>
            </tr>
        </thead>
        <tbody>
            <?php
           
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<th>" . $row["nom"] . "</th>";
                    echo "<th>" . $row["capacite"] . "</th>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }
            mysqli_close($conn);
            ?>
        </tbody>
    </table>
</body>
</html>
            

