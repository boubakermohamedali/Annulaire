<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// 1 . PHP va récupéer les données dans CSV
// Chemin du fichier CSV
$cheminFichierCSV = "excel/Personnels_permanents GRETA CA V8 2.csv";

// Ouvrir le fichier en lecture
$fichier = fopen($cheminFichierCSV, 'r');

// Vérifier si le fichier a été ouvert avec succès
if ($fichier) {
    // Parcourir les lignes du fichier
    while (($ligne = fgetcsv($fichier)) !== false) {
        // $ligne est un tableau contenant les valeurs de chaque colonne de la ligne courante
        
        // Traiter les données de la ligne (exemple: afficher la première colonne)
        echo $ligne[0] . "<br>";
    }
    
    // Fermer le fichier
    fclose($fichier);
} else {
    // Gérer l'erreur si le fichier n'a pas pu être ouvert
    echo "Erreur lors de l'ouverture du fichier.";
}
?>
<?php
// 2 . PHP va mettre les donnéésdans un tableau
// Création d'un tableau vide
$tableau = array();

// Ajout d'éléments au tableau
$tableau[] = "Donnée 1";
$tableau[] = "Donnée 2";
$tableau[] = "Donnée 3";
$tableau[] = "Donnée 4";
$tableau[] = "Donnée 5";

// Accès aux éléments du tableau
echo $tableau[0];  // Affiche "Donnée 1"
echo $tableau[1];  // Affiche "Donnée 2"
echo $tableau[2];  // Affiche "Donnée 3"
echo $tableau[3];  // Affiche "Donnée 4"
echo $tableau[4];  // Affiche "Donnée 5"

// Parcourir et afficher tous les éléments du tableau
foreach ($tableau as $element) {
    echo $element . "<br>";
}
?>
<?php
// 3 . PHP va convertir le tableau en json
// Tableau de données
$tableau = array(
    "nom" => "BALBO",
    "prenom" => "Nathalie",
    "emploi" => "COORDO"
);

// Convertir le tableau en JSON
$json = json_encode($tableau);

// Afficher le JSON
echo $json;
?>
<?php 
//{"nom":"John","age":30,"ville":"Paris"}
?>
<?php
// 4 . PHP va afficher le json
// Données que vous souhaitez encoder en JSON
$data = array(
    "nom" => "BALBO",
    "prenom"=> "Nathalie",
    "emploi" => "COORDO"
);

// Convertir les données en JSON
$json = json_encode($data);

// Afficher le JSON
echo $json;
?>
<?php
//{"nom":"BALBO","prenom":"Nathalie","emploi":"COORDO"};
?>
</body>
</html>