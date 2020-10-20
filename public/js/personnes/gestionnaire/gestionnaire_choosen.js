$(document).ready(function() {

    // Géstion du tableau d'activités
    idActivite = $("#idActivite");
    $("#idActivite").chosen({ max_selected_options: 2 });
    $("#idActivite").change(function(e) {
        e.preventDefault();
    });

    $(".chosen_select").bind("chosen:maxselected", function() {
        alert("vous avez atteint le nombre d'éléments autorisés");
    });

    idActivite.change(function(e) {
        if (idActivite.val().length >= 2)
            $(".activite-invalid").slideUp();
    });

    $("#new").submit(function(e) {
        resultat = true;
        v = idActivite.val().length;
        if (v < 2) {
            $(".activite-invalid").slideDown();
        }
        return resultat;
    });


    // Géstion du tableau de fournisseur
    idFournisseur = $("#idFournisseur");
    $("#idFournisseur").chosen({ max_selected_options: 2 });
    $("#idFournisseur").change(function(e) {
        e.preventDefault();
    });

    $(".chosen_select").bind("chosen:maxselected", function() {
        alert("vous avez atteint le nombre d'éléments autorisés");
    });

    idFournisseur.change(function(e) {
        if (idFournisseur.val().length >= 2)
            $(".fournisseur-invalid").slideUp();
    });

    $("#new").submit(function(e) {
        resultat = true;
        v = idFournisseur.val().length;
        if (v < 2) {
            $(".fournisseur-invalid").slideDown();
        }
        return resultat;
    });
});