<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>exoTrois</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="row">
        <h3>Ajout Modèle voiture</h3>
    </div>
    <div class="formulaire">
        <div class="row">
            <div class="success">
            </div>
        </div>
        <form id="ajout" action="add.php" method="post">
            <input type="text" id="modele" name="modele" required="required" placeholder="Modèle" align="center"/><br />
            <p class="errorModele"></p>
            <input type="text" id="marque" name="marque" required="required" placeholder="Marque" align="center" /><br />
            <p class="errorMarque"></p>
            <input type="text" id="annee" name="annee" required="required" placeholder="Année" align="center" /><br />
            <p class="errorAnnee"></p>
            <input type="text" id="couleur" name="couleur" required="required" placeholder="Couleur" align="center" /><br />
            <p class="errorCouleur"></p>
            <input id="submit" type="submit" value="Envoyer" />
        </form>
    </div>
</div>


</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="script.js"></script>

</body>
</html>