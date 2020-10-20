$(document).ready(function() {
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
});