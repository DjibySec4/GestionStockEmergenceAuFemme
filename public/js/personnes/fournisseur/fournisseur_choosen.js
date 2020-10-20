$(document).ready(function() {
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