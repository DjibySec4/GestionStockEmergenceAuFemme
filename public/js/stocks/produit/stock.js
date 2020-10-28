$(document).ready(function() {
    // Bouton d'impression
    var bouton = document.getElementById('button-imprimer');
    bouton.onclick = function(e) {
      e.preventDefault();
      print();
    }
    
    $(".selectionnerProduit").hide();
    $("#vendreUnProduit").click(function(e) {
        $(".selectionnerProduit").show();
        return false;  //ne soumet pas le frm
    });
})




