$(document).ready(function() {
        nom = $("#nom");
        prenom = $("#prenom");
        dateNaissance = $("#dateNaissance");
        adresse = $("#adresse");
        telephone = $("#telephone");
        nationalite = $("#nationalite");
        photo = $("#photo");
        idActivite = $("#idActivite");
             
        // Afficher / Masquer l'ajout d'une activité pendant
        //l'ajout d'un travailleur
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

        
        testInput(nom);
        testInput(prenom);
        testInput(dateNaissance);
        testInput(adresse);
        testInput(nationalite);
        testInput(telephone);

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

            if (nom.val() == '' || prenom.val() == '' || dateNaissance.val() == '' || adresse.val() == '' || dateNaissance.val() == '') {
                $("#new").addClass("was-validated");
                resultat = false;
            }
            return resultat;
        });

        $("#edit").submit(function(e) {

            resultat = true;
            if (nom.val() == '' || prenom.val() == '' || dateNaissance.val() == '' || adresse.val() == '' || dateNaissance.val() == '') {
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
