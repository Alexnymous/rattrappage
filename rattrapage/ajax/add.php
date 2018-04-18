<?php
// Si marque, modele, login et couleur en POST existent et ne sont pas vide, alors on execute la suite.
if(isset($_POST['modele']) && ($_POST['marque']) && ($_POST['annee']) && ($_POST['couleur']))
{
    // Déclaration des variables pour simuler l'existence d'une base de données (simplification de l'exercice).

    $marqueDb   = "pigueot";
    $modeleDb   = "404";
    $anneeDb    = '1999';
    $couleurDb  = 'rose';

    if($_POST['modele'] != $modeleDb){
        $errors['Veuillez saisir le bon modèle'] = true;
    }
    if($_POST['marque'] != $marqueDb){
        $errors['Veuillez saisir la bonne marque'] = true;
    }
    if($_POST['annee'] != $anneeDb){
        $errors['Veuillez saisir la bonne année'] = true;
    }
    if($_POST['couleur'] != $couleurDb){
        $errors['Veuillez saisir la bonne couleur'] = true;
    }
    if(!isset($errors)){
        $success = true;
        // Sur un vrai site, on procède à la connexion ici
    }
}
if(isset($errors)){
    $jsonResponse = array('success' => false, 'errors' => $errors);
} elseif(isset($success)){
    $jsonResponse = array('success' => true, 'errors' => false);
} else {
    $jsonResponse = array('success' => false, 'errors' => array('incorrect-query'));
}
// On affiche en JSON le contenu du tableau jsonResponse, qui sera récupéré ensuite par la requête AJAX.
echo json_encode($jsonResponse);