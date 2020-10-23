$(document).ready(function() {
    nom = $("#nom");
    prix = $("#prix");
    quantite = $("#qte");
    idUnite = $("#idUnite");

  

    // Afficher / Masquer l'ajout d'une unité pendant
    //l'ajout d'un composant
    $("#addUnite").hide();

    $("#newUnite").click(function(e) {
        $("#selectionnerUneUnite").slideUp(); //masquer
        $("#newUnite").slideUp();
        $("#addUniteButton").slideDown();
        $("#addUnite").slideDown(); //afficher
        $("#idUnite").val('');
        return false;
    });
    $("#addUniteButton").click(function(e) {
        $("#addUniteButton").slideUp();
        $("#addUnite").slideUp();
        $("#selectionnerUneUnite").slideDown();
        $("#newUnite").slideDown();
        return false;
    });

    
    testInput(nom);
    testInput(prix);
    testInput(quantite);


    $("#q").submit(function(e) {
        if ($("#search").val() == "") {
            return false;
        }
    })


    $("#new").submit(function(e) {

        resultat = true;

        if (nom.val() == '' || prix.val() == '' || quantite.val() == '') {
            $("#new").addClass("was-validated");
            resultat = false;
        }
        return resultat;
    });

    $("#edit").submit(function(e) {

        resultat = true;
        if (nom.val() == '' || prix.val() == '' || quantite.val() == '') {
            $("#edit").addClass("was-validated");
            resultat = false;
        }
        return resultat;
    });

    function testInput(value) {
        value.keypress(function(e) {
            if (value.val().length <= 0) {
                let b = /[a-zA-Z]/g;
                b = String.fromCharCode(e.which).search(b);
                return b != -1;
            }
        });
    }
    
    
})
