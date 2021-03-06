$(document).ready(function() {

    // Choosen Activité
    idActivite = $("#idActivite");
    $("#idActivite").chosen({ max_selected_options: 10 });
    $("#idActivite").change(function(e) {
        e.preventDefault();
    });

    $(".chosen_select").bind("chosen:maxselected", function() {
        alert("vous avez atteint le nombre d'éléments autorisés");
    });

    idActivite.change(function(e) {
        if (idActivite.val().length >= 10)
            $(".activite-invalid").slideUp();
    });


    // Choosen Composant
    idComposant = $("#idComposant");
    $("#idComposant").chosen({ max_selected_options: 50 });
    $("#idComposant").change(function(e) {
        e.preventDefault();
    });

    $(".chosen_select").bind("chosen:maxselected", function() {
        alert("vous avez atteint le nombre d'éléments autorisés");
    });

    idComposant.change(function(e) {
        if (idComposant.val().length >= 50)
            $(".activite-invalid").slideUp();
    });


    // Choosen Unité
    idUnite = $("#idUnite");
    $("#idUnite").chosen({ max_selected_options: 1 });
    $("#idUnite").change(function(e) {
        e.preventDefault();
    });

    $(".chosen_select").bind("chosen:maxselected", function() {
        alert("vous avez atteint le nombre d'éléments autorisés");
    });

    idUnite.change(function(e) {
        if (idUnite.val().length >= 1)
            $(".unite-invalid").slideUp();
    });

    $("#new").submit(function(e) {
        resultat = true;
        v = idUnite.val().length;
        if (v < 1) {
            $(".unite-invalid").slideDown();
        }
        return resultat;
    });
});