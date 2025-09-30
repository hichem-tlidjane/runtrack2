<!-- En utilisant php et mysqli, connectez-vous à la base de données “jour09”. A l’aide d’une
requête SQL, récupérez l’ensemble des informations de la table etudiants. Affichez le
résultat de cette requête dans un tableau html. La première ligne de votre tableau html
(thead) doit contenir le nom des champs. Les suivantes (tbody) doivent contenir les
données présentes dans votre base de données. -->

 <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "jour09";

 $conn = mysqli_connect($servername, $username, $password);

 echo "connexion reussie";
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
                <th>ID</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
           
            mysqli_select_db($conn, $dbname);
            
            $sql = "SELECT * FROM etudiants";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<th>" . $row["id"] . "</th>";
                    echo "<th>" . $row["prenom"] . "</th>";
                    echo "<th>" . $row["nom"] . "</th>";
                    echo "<th>" . $row["naissance"] . "</th>";
                    echo "<th>" . $row["sexe"] . "</th>";
                    echo "<th>" . $row["email"] . "</th>";
                    echo "</tr>";
                }
            } 
            // else {
            // //     echo "0 results";
            // }
            
            mysqli_close($conn);
            ?>
        </tbody>
    </table>
</body>
</html>
