<?php
// http://localhost/runtrack2/jour04/job02/?username=&password=&bouton=valider
//verifier si on a rempli le formulaire

if(isset($_GET["bouton"])){
    echo "<br/>";
    if(isset($_GET["username"])){
        echo "username: " . $_GET["username"];

    }
}


//

?>
<!DOCTYPE html>
<html lang="fr">

<style>
    table {
        border-collapse: collapse;
    }

    td,
    th{
        border: 1px solid #ddd;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    th {
        text-align: left;
    }
</style>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Formulaire</title>
</head>
<body>

    <form method="get" action="">
        <label for="username">prenom:</label>
        <input type="text" id="username" name="prenom" ><br><br>
        <label for="text">nom</label>
        <input type="text" id="lastname" name="nom" ><br><br>
        <button type="submit" >submit</button> 
     </form>
     <table>

<tr>
    <td>argument</td>

    <td>valeur</td>
</tr>

<?php
foreach($_GET as $key => $value){

  ?>
  <tr>

    <td> <?= $key ?> </td>

 <td> <?= $value ?> </td>
  </tr>
  <?php
}
?>
              

</table>


  

</body>
