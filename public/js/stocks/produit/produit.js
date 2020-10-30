$(document).ready(function() {
    reference = $("#reference");
    nom = $("#nom");
    photo = $("#photo");
    idActivite = $("#idActivite");
    idUnite = $("#idUnite");

   
    $("#infoProduit").hide();


    $(".selectionnerProduit").hide();
    $("#vendreUnProduit").click(function(e) {
        $(".selectionnerProduit").show();
        return false;  //ne soumet pas le frm
    });
    
    // Afficher / Masquer l'ajout d'une activité pendant
    //l'ajout d'un produit
    $("#addActivite").hide();

    $("#newActivite").click(function(e) {
        $("#selectionnerUneActivite").slideUp(); //masquer
        $("#newActivite").slideUp();
        $("#addActiviteButton").slideDown();
        $("#addActivite").slideDown(); //afficher
        $("#idActivite").val('');
        return false;
    });
    $("#addActiviteButton").click(function(e) {
        $("#addActiviteButton").slideUp();
        $("#addActivite").slideUp();
        $("#selectionnerUneActivite").slideDown();
        $("#newActivite").slideDown();
        return false;
    });

    // Afficher / Masquer l'ajout d'une unité pendant
    //l'ajout d'un produit
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
    testInput(reference);
    testInput(photo);

    $('[data-toggle="tooltip"]').tooltip();

    $("#photo").change(function(e) {
        if (!$("#photo").val().endsWith('.png') && !$("#photo").val().endsWith('.jpeg') && !$("#photo").val().endsWith('.jpg')) {
            $("#photo").val('');
        }
        return false;
    });

    $("#q").submit(function(e) {
        if ($("#search").val() == "") {
            return false;
        }
    })


    $("#new").submit(function(e) {

        resultat = true;

        if (nom.val() == '' || reference.val() == '') {
            $("#new").addClass("was-validated");
            resultat = false;
        }
        return resultat;
    });

    $("#edit").submit(function(e) {

        resultat = true;
        if (nom.val() == '' || reference.val() == '') {
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
