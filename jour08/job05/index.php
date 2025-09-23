<!-- <! Développez le fameux jeu du morpion. Faites un tableau html avec 3 lignes et 3
colonnes représentant la grille. Au début de la partie, chacune des cases contient un
bouton de type submit dont la valeur est “”. Si un joueur clique sur ce bouton, le bouton
est remplacé par un “O” ou par un “X”. C’est le joueur “X” qui commence.
Dès qu’un joueur a gagné, affichez “X a gagné” ou “O a gagné” et réinitialisez la partie. Si
toutes les cases ont été cliquées et que personne n’a gagné, affichez “Match nul” et
réinitialisez la partie. Un bouton “réinitialiser la partie” présent en dessous de la grille
permet également de réinitialiser la partie à tout moment. > -->

<?php

session_start();

$grille = [];

if (isset($_SESSION['grille'])) {

    $grille = $_SESSION['grille'];
} else {
    $grille = [
        ['', '', ''],
        ['', '', ''],
        ['', '', '']
    ];
    $_SESSION['grille'] = $grille;

    $_SESSION['tour_de_role'] = 'X';
}

// if( isset($_POST['C9']))

// if(isset($_SESSION)){
//     $grille = $_SESSION['grille'];




// }


if (isset($_POST['A1']) && $_POST['A1'] === '') {

    $_SESSION['grille'][0][0] = $_SESSION['tour_de_role'];

    if ($_SESSION['tour_de_role'] === 'X') {
        $_SESSION['tour_de_role'] = 'O';
    } else {
        $_SESSION['tour_de_role'] = 'X';
    }
}


if (isset($_POST['A2']) && $_POST['A2'] === '') {

    $_SESSION['grille'][0][1] = $_SESSION['tour_de_role'];

    if ($_SESSION['tour_de_role'] === 'X') {
        $_SESSION['tour_de_role'] = 'O';
    } else {
        $_SESSION['tour_de_role'] = 'X';
    }
}


if (isset($_POST['A3']) && $_POST['A3'] === '') {

    $_SESSION['grille'][0][2] = $_SESSION['tour_de_role'];

    if ($_SESSION['tour_de_role'] === 'X') {
        $_SESSION['tour_de_role'] = 'O';
    } else {
        $_SESSION['tour_de_role'] = 'X';
    }
}

if (isset($_POST['B4']) && $_POST['B4'] === '') {

    $_SESSION['grille'][1][0] = $_SESSION['tour_de_role'];

    if ($_SESSION['tour_de_role'] === 'X') {
        $_SESSION['tour_de_role'] = 'O';
    } else {
        $_SESSION['tour_de_role'] = 'X';
    }
}

if (isset($_POST['B5']) && $_POST['B5'] === '') {

    $_SESSION['grille'][1][1] = $_SESSION['tour_de_role'];

    if ($_SESSION['tour_de_role'] === 'X') {
        $_SESSION['tour_de_role'] = 'O';
    } else {
        $_SESSION['tour_de_role'] = 'X';
    }
}

if (isset($_POST['B6']) && $_POST['B6'] === '') {

    $_SESSION['grille'][1][2] = $_SESSION['tour_de_role'];

    if ($_SESSION['tour_de_role'] === 'X') {
        $_SESSION['tour_de_role'] = 'O';
    } else {
        $_SESSION['tour_de_role'] = 'X';
    }
}

if (isset($_POST['C7']) && $_POST['C7'] === '') {

    $_SESSION['grille'][2][0] = $_SESSION['tour_de_role'];

    if ($_SESSION['tour_de_role'] === 'X') {
        $_SESSION['tour_de_role'] = 'O';
    } else {
        $_SESSION['tour_de_role'] = 'X';
    }
}

if (isset($_POST['C8']) && $_POST['C8'] === '') {

    $_SESSION['grille'][2][1] = $_SESSION['tour_de_role'];

    if ($_SESSION['tour_de_role'] === 'X') {
        $_SESSION['tour_de_role'] = 'O';
    } else {
        $_SESSION['tour_de_role'] = 'X';
    }
}


if (isset($_POST['C9']) && $_POST['C9'] === '') {

    $_SESSION['grille'][2][2] = $_SESSION['tour_de_role'];

    if ($_SESSION['tour_de_role'] === 'X') {
        $_SESSION['tour_de_role'] = 'O';
    } else {
        $_SESSION['tour_de_role'] = 'X';
    }
}

// Vérification des conditions de victoire
function checkWinner($grille, $player)
{
    // Lignes
    for ($i = 0; $i < 3; $i++) {
        if ($grille[$i][0] === $player && $grille[$i][1] === $player && $grille[$i][2] === $player) {
            return true;
        }
    }
    // Colonnes
    for ($i = 0; $i < 3; $i++) {
        if ($grille[0][$i] === $player && $grille[1][$i] === $player && $grille[2][$i] === $player) {
            return true;
        }
    }
    // Diagonales
    if ($grille[0][0] === $player && $grille[1][1] === $player && $grille[2][2] === $player) {
        return true;
    }
    if ($grille[0][2] === $player && $grille[1][1] === $player && $grille[2][0] === $player) {
        return true;
    }
    return false;
}

if (checkWinner($_SESSION['grille'], 'X')) {
    echo 'X a gagné';
    session_destroy();
    header("Refresh:2");
    exit;
} elseif (checkWinner($_SESSION['grille'], 'O')) {
    echo 'O a gagné';
    session_destroy();
    header("Refresh:2");
    exit;
} else {
    // Vérifier le match nul
    $full = true;
    foreach ($_SESSION['grille'] as $row) {
        foreach ($row as $cell) {
            if ($cell === '') {
                $full = false;
                break 2;
            }
        }
    }
    if ($full) {
        echo 'Match nul';
        session_destroy();
        header("Refresh:2");
        exit;
    }
}
function resetGame() {
    session_destroy();
    header("LOCATION: index.php");
    exit;
}
// REINITIALISER LA PARTIE
if (isset($_POST['reset'])) {
    resetGame();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF8">
    <meta name="viewport" content="width=devicewidth, initialscale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Morpion</title>
</head>

<body>
    <div class="centrage">
        <form action="" method="post">
            <table class="table">
                <tr>
                    <td><button type="submit" value="<?= $_SESSION['grille'][0][0] ?>" name="A1"><?= $_SESSION['grille'][0][0] ?></button></td>
                    <td><button type="submit" value="<?= $_SESSION['grille'][0][1] ?>" name="A2"><?= $_SESSION['grille'][0][1] ?></button></td>
                    <td><button type="submit" value="<?= $_SESSION['grille'][0][2] ?>" name="A3"><?= $_SESSION['grille'][0][2] ?></button></td>
                </tr>
                <tr>
                    <td><button type="submit" value="<?= $_SESSION['grille'][1][0] ?>" name="B4"><?= $_SESSION['grille'][1][0] ?></button></td>
                    <td><button type="submit" value="<?= $_SESSION['grille'][1][1] ?>" name="B5"><?= $_SESSION['grille'][1][1] ?></button></td>
                    <td><button type="submit" value="<?= $_SESSION['grille'][1][2] ?>" name="B6"><?= $_SESSION['grille'][1][2] ?></button></td>
                </tr>
                <tr>
                    <td><button type="submit" value="<?= $_SESSION['grille'][2][0] ?>" name="C7"><?= $_SESSION['grille'][2][0] ?></button></td>
                    <td><button type="submit" value="<?= $_SESSION['grille'][2][1] ?>" name="C8"><?= $_SESSION['grille'][2][1] ?></button></td>
                    <td><button type="submit" value="<?= $_SESSION['grille'][2][2] ?>" name="C9"><?= $_SESSION['grille'][2][2] ?></button></td>
                </tr>
            </table>
        </form>
    </div>
    <div>
    <form action="" method="post">
            <button type="submit" name="reset" >Réinitialiser la partie</button>
        </form>
    </div>
</body>

</html>