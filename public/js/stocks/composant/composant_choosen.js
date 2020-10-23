$(document).ready(function() {

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