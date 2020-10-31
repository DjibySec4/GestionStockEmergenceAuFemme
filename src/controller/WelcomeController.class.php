<?php
session_start();

use libs\system\Controller;
use src\model\ActiviteRepository;
use src\model\ProduitRepository;
use src\model\TravailleurRepository;

class WelcomeController extends Controller{ 

    private $data;
    private $activite_db;
    private $produit_db;
    private $travailleur_db;

    public function __construct(){
        parent::__construct();
        $this->activite_db = new ActiviteRepository();
        $this->produit_db = new ProduitRepository();
        $this->travailleur_db = new TravailleurRepository();

        if(isset($_SESSION['user_session'])) {
            $this->data['user'] = $_SESSION['user_session'];     
        } 
        else {
            // echo "La session user_session n'existe pas car sa valeur est : ";
            // var_dump($_SESSION); die;
            return $this->view->redirect('Login');
        }
    }
   
    public function index(){
        $this->data['title'] = "Gestion Stock";

        $this->data["nbActivite"] = $this->activite_db->nbActivite();
        $this->data["nbProduit"] = $this->produit_db->nbProduit();
        $this->data["nbTravailleur"] = $this->travailleur_db->nbTravailleur();

        $page = 1;
        $nbEPage = 10;
        $this->data['nbProduits'] = $this->produit_db->nbProduit();
        $this->data['nbPage'] = $nbPage = ceil($this->data['nbProduits'] / $nbEPage);
        $page = $page <= $nbPage ? $page : 1;
        $this->data['page'] = $page = (int) $page;
        $this->data['title'] = 'Liste des Produits';
        $this->data['produits'] = $this->produit_db->listeProduits($page - 1, $nbEPage);
        
        return $this->view->load("welcome/index", $this->data);
    }

}
?>