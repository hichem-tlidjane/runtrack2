<?php
// http://localhost/runtrack2/jour04/job02/?username=&password=&bouton=valider
//verifier si on a rempli le formulaire

if(isset($_POST["bouton"])){
    echo "PHP <br/>";
    if(isset($_POST["username"])){
        echo "username: " . $_POST["username"];

    }
}


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
    <title>_POST$_POST Formulaire</title>
</head>
<body>

    <form method="post" action="">
        <label for="prenom">prenom:</label>
        <input type="text" id="Stephane" name="prenom" ><br><br>
        <label for="lastname">nom</label>
        <input type="text" id="Dupont" name="nom"><br><br>
        <button type="submit" >submit</button> 
     </form>
     <table>



<tr>
    <td>argument</td>

    <td>valeur</td>
</tr>

<?php
foreach($_POST as $key => $value){

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
