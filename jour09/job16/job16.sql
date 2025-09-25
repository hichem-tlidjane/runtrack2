-- Ecrivez dans le fichier “job16.sql” une requête permettant de récupérer le nom de
-- l'étage ayant la salle avec la plus grande capacité (et afficher aussi le nom de cette salle
-- ainsi que sa capacité).
-- Dans ce résultat, la colonne “nom” de la salle doit être renommée en “Biggest Room”

SELECT etage.nom AS nom_etage, salles.nom AS "Biggest Room", salles.capacite
FROM salles
JOIN etage ON salles.id_etage = etage.id
WHERE salles.capacite = (SELECT MAX(capacite) FROM salles);
