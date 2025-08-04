<?php
// Déclaration des variables
$float = 12.25;
$bool = false;
$int = 4568;
$chaine = "La Plateforme";

// Tableau associatif regroupant les variables
$variables = [
    "float" => $float,
    "bool" => $bool,
    "int" => $int,
    "chaine" => $chaine
];
?>
<table border="1">
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($variables as $nom => $valeur): ?>
            <tr>
                <td><?php echo gettype($valeur); ?></td>
                <td><?php echo $nom; ?></td>
                <td>
                    <?php
                    // Traitement spécial pour le booléen
                    echo is_bool($valeur) ? ($valeur ? "true" : "false") : $valeur;
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
