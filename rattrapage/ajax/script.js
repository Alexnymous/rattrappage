$(document).ready(function() {
    // Action qui est exécutée quand le formulaire est envoyé ( #connexion est l'ID du formulaire)
    $('#add').on('submit', function(e) {
        e.preventDefault(); // On empêche de soumettre le formulaire

        var $this = $(this); // L'objet jQuery du formulaire

        // Envoi de la requête HTTP en mode asynchrone
        $.ajax({
            url: 'add.php', // On récupère l'action (ici login.php)
            type: 'POST', // On récupère la méthode (post)
            data: $this.serialize(), // On sérialise les données = Envoi des valeurs du formulaire
            dataType: 'json', // JSON
            success: function(json) { // Si ça c'est passé avec succès
                // ici on teste la réponse
                if(json.success) {
                    $('#add').remove();
                    $('.success').html('Vous êtes connecté !');
                }else{

                    if(json.errors.incorrectEmail) {
                        $('.errorModele').html('Modele incorrect');
                    }
                    if(json.errors.incorrectPassword){
                        $('.errorMarque').html('Marque incorrect');
                    }
                    if(json.errors.incorrectPassword){
                        $('.errorAnnee').html('Année incorrect');
                    }
                    if(json.errors.incorrectPassword){
                        $('.errorCouleur').html('Couleur incorrect');
                    }
                }
            }
        });

    });
});