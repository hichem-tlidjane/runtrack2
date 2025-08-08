<?php
    //    

    //  Si nombre n'est pas renseigné par la méthode GET il sera donc false (car empty gére un booleen dans sa fonction)

    if (!empty($_GET['nombre'])) {
        // On déclare qu'on attribue nombre à un entier 
        $nombre = (int)$_GET['nombre'];
        // Si le modolu de 2 est implicitement égal à 0 donc un nombre divisible par lui meme obligatoirement
        if ($nombre % 2 === 0) {
            // on affiche echo nombre avec le résultat message pair (echo)
            echo $nombre . " : nombre pair ";
            // sinon nombre est impair avec le résultat message impair (echo)
        } else {
             echo $nombre  . " : nombre impair ";
        }
    } 
        // On retourne le calcul et l'affichage de l'indexation de get_nombre 
        // Par une formule d'indexaction de $i / on implémente 1000 strictement et on incrémente de +1
        else { 
            for ($i=2 ; $i <= 1000 ; $i++) { 
                // Si $i est divisbile par lui meme
                // Si le modolu de 2 est implicitement égal à 0 donc un nombre divisible par lui meme obligatoirement
                if ($i % 2 == 0) {
                    // on affiche echo nombre avec le résultat message pair (echo)
                    echo $i . " : nombre pair <br>";
            }
                else {
                    // sinon nombre est impair avec le résultat message impair (echo)
                    echo $i . ' : nombre impair <br>';
            }   
        }
    }


?>
<Head>
 <title> JOB</title>
 </Head>

 <body>

    <h2>Job 6</h2>

    <form action="" method="get">
        <label for="nombre">Entrez un nombre :</label><br>
        <input type="text" id="nombre" name="nombre"><br><br>
        <input type="submit" value="Vérifier">
    </form>
</body>