// Bouton d'impression
var bouton = document.getElementById('button-imprimer');
bouton.onclick = function(e) {
  e.preventDefault();
  print();
}