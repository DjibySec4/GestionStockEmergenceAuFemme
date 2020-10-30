<?php
session_start();
use libs\system\Controller;
use src\model\ActiviteRepository;
use src\model\ComposantRepository;
use src\model\HistoriqueStockRepository;
use src\model\ProduitRepository;
use src\model\UniteRepository;
use src\service\upload\SamaneUpload;

class ProduitController extends Controller
{

    private $produit_db;
    private $data;
    private $historiqueStock_db;
    private $composant_db;

    public function __construct()
    {
        parent::__construct();
        $this->produit_db = new ProduitRepository;
        $this->unite_db = new  UniteRepository;
        $this->activite_db = new  ActiviteRepository;
        $this->historiqueStock_db = new  HistoriqueStockRepository;
        $this->composant_db = new   ComposantRepository;
        if (isset($_SESSION['user_session'])) {
            $this->data['user'] = $_SESSION['user_session'];
        } else {
            $this->view->redirect('Login');
        }
    }

    // Liste des produits
    public function liste($page = 1)
    {
        $nbEPage = 10; 
        $this->data['nbProduits'] = $this->produit_db->nbProduit();
        $this->data['stockActuel'] = $this->produit_db->stockActuel();
        $this->data['revenus'] = $this->produit_db->revenu();
        $this->data['nbProduitsPerime'] = $this->produit_db->nbProduitPerime();
        $this->data['nbPage'] = $nbPage = ceil($this->data['nbProduits'] / $nbEPage);
        $page = $page <= $nbPage ? $page : 1;
        $this->data['page'] = $page = (int) $page;
        $this->data['title'] = 'Liste des Produits';
        $this->data['produits'] = $this->produit_db->listeProduits($page - 1, $nbEPage);
        $this->view->load('pages/produit/liste', $this->data);
    }

      // Liste des stocks
      public function listeStock($page = 1)
      {
          $nbEPage = 5;
          $this->data['nbProduits'] = $this->produit_db->nbProduit();
          $this->data['stockActuel'] = $this->produit_db->stockActuel();
          $this->data['nbProduitsPerime'] = $this->produit_db->nbProduitPerime();
          $this->data['revenus'] = $this->produit_db->revenu();
          $this->data['nbPage'] = $nbPage = ceil($this->data['nbProduits'] / $nbEPage);
          $page = $page <= $nbPage ? $page : 1;
          $this->data['page'] = $page = (int) $page;
          $this->data['title'] = 'Etat Srock Produit';
          $this->data['produits'] = $this->produit_db->listeProduits($page - 1, $nbEPage);
          $this->data["dateActuelle"] = date('Y-m-d');
          $this->view->load('pages/produit/stock', $this->data);
      }
 
      //Affiche la liste d'activité d'un produit spécifique.   
      public function listeActivite($reference)
      {
            $this->data['nbProduits'] = $this->produit_db->nbProduit();
            $this->data['stockActuel'] = $this->produit_db->stockActuel();
            $this->data['nbProduitsPerime'] = $this->produit_db->nbProduitPerime();
            $this->data['revenus'] = $this->produit_db->revenu();

            $this->data["produit"] = $produit = $this->produit_db->getProduit($reference);
            $this->data["activites"] = $produit->getActivites();

            $this->view->load('pages/produit/listeActivite', $this->data);
      }

     //Affiche la page d'achat d'un produit   
      public function venteProduit($page = 1)
      {
        $nbEPage = 10; 
        $this->data['nbProduits'] = $this->produit_db->nbProduit();
        $this->data['stockActuel'] = $this->produit_db->stockActuel();
        $this->data['revenus'] = $this->produit_db->revenu();
        $this->data['nbProduitsPerime'] = $this->produit_db->nbProduitPerime();
        $this->data['nbPage'] = $nbPage = ceil($this->data['nbProduits'] / $nbEPage);
        $page = $page <= $nbPage ? $page : 1;
        $this->data['page'] = $page = (int) $page;
        $this->data['produits'] = $this->produit_db->listeProduits($page - 1, $nbEPage);
        $this->data['title'] = 'Vente de produit';
        $this->view->load('pages/produit/vente', $this->data);
      }

     //Affiche le nouveau panier   
      public function ajouterAuPanier()
      {
        extract($_POST);
        session_start();

        // Si le panier existe déjà, on le sauve
        // dans $panier sinon on crée un nouveau panier.
        if(isset($_SESSION['panier']))
        {
            $panier  =  $_SESSION['panier'];
        }
        else
        {
            $panier = array();
        } 
        // Si le panier n'existe pas, $index = 0.
        $index = count($panier);
        $this->data['reference']   = $panier[$index]["ref"] = $reference;
        $this->data['designation'] = $panier[$index]["designation"] = $designation;
        $this->data['prix'] = $panier[$index]["prix"] = $prix;
        $this->data['quantite'] = $panier[$index]["quantite"] = $qte;
        $this->data['argent'] = $panier[$index]["argent"] = $argent;
        if( ($prix * $qte) > $this->data['argent'] )
        {
            $this->data['money'] = "Vous me devez " . ($this->data['argent'] - ($prix * $qte));
        }
        else
        {
            $this->data['money'] = ($prix * $qte) - ($this->data['argent']);

        }
    
        $_SESSION["panier"] = $panier;
    
        $this->data['nbProduits'] = $this->produit_db->nbProduit();
        $this->data['stockActuel'] = $this->produit_db->stockActuel();
        $this->data['revenus'] = $this->produit_db->revenu();
        $this->data['nbProduitsPerime'] = $this->produit_db->nbProduitPerime();

       
        $total = 0;
        for($i =0; $i< count($panier);$i++)
        {
            $total = $total + $prix * $qte;
        }
        $this->data["total"] = $total;

        $this->view->load('pages/produit/panier', $this->data);
      }
  


    // Ajoute un produit    
    public function add()
    { 
        $activite = [];
        $unite = [];
        $this->data['unites'] = $this->produit_db->listeUnites();
        $this->data['activites'] = $this->produit_db->listeActivites();
        $this->data['composants'] = $this->composant_db->liste();

        if (isset($_POST['annuler'])) {
            $this->view->redirect('Produit/liste/1');
        }
        if (isset($_POST['ajouter'])) 
        {
            extract($_POST);
            $produit = new Produit;
            $newActivite = new Activite;
            $newUnite = new Unite;

            /**
             * Ajout des infos du produit
             */
            $produit->setNom($nom ?? '');
            $produit->setQte($qte ?? '');
            $produit->setPrix($prix ?? '');
            $produit->setEnPromotion($promotion ?? ''); 
            $produit->setCreatedAt($createdAt ?? '');
            $produit->setUpdatedAt($updatedAt ?? '');
            $produit->setDateFabtication($dateFabtication ?? '');
            $produit->setDateDePeremsion($datePeremsion ?? '');
            $produit->setNomOperation($nomOperation ?? '');
            $upload = new SamaneUpload;
            $title = 'photo';
            $folder = 'public/images/stocks/produits';
            if (isset($_FILES[$title]) && $_FILES[$title] != '') 
            {
                $upload->load($title, $folder);
                $produit->setPhoto($_FILES[$title]['name']);
            } else {
                $produit->setPhoto('');
            }
            
            //On set la refernce en derniere postion pr avoir les donnée deja saise  
            $liste_produit = $this->produit_db->liste();
            $tabProduit[] = array();
            foreach($liste_produit as $p)
            {
                $tabProduit[] = $p->getReference();
            }
            if(in_array($reference, $tabProduit))
            {
                $this->data["reference_existe"] = "Il y'a déjà un produit de même reference dans la base de données ! ";
                $this->data['produit'] = $produit;
                $this->data['title'] = "Ajout d'un Produit";
                $this->view->load('pages/produit/add', $this->data);
            }
            else
            {
                $produit->setReference($reference ?? '');
            }
            
            // Ajout d'une new activité ou ajout des activité séléctionnées
            if (isset($nomActivite) && $nomActivite != "") {
                // Ajout d'une new activité
                $newActivite->setNom($nomActivite ?? '');
                $newActivite->setDescription($descriptionActivite ?? '');

                $this->activite_db->addActivite($newActivite);
                if(isset($abreviation))
                {
                    // On se redirige pas
                }
                else
                {
                    return header("location:$url_base/Produit/add");
                }
            } else {
                 //Ajout des Activités sélectionnées
                 foreach($activite as $a)
                 {
                     $produit->addActivite($this->produit_db->getActivite(intval($a)));
                    }
                }
                
                
                // Ajout des composants séléctionnées
                foreach($composant as $c)
                {
                $produit->addComposant($this->produit_db->getComposant(intval($c)));
            }


            // Ajout d'une new unite ou ajout des unités séléctionnées
            if (isset($abreviation) && $abreviation != "") {
                // Ajout d'une new unité   
                $newUnite->setAbreviation($abreviation ?? '');
                $newUnite->setNomComplet($nomComplet ?? '');
 
                $this->unite_db->addUnite($newUnite);
                return header("location:$url_base/Produit/add");
           } else {
                //Ajout des unités sélectionnées
                foreach($unite as $u)
                {
                    $produit->setUnite($this->produit_db->getUnite(intval($u)));
                }
           }
           
            if ($produit->getReference() == '' || $produit->getNom() == '' || $produit->getPhoto() == '')
            {
                $this->data['vide'] = 1;
                $this->data['produit'] = $produit;
                $this->data['title'] = "Ajout d'un Produit";
                $this->view->load('pages/produit/add', $this->data);
            } 
            
            
            /**
            * Persistance  du Produit
            */ 
            $refProduitAjouter = $this->produit_db->addProduit($produit);
            /**
            * Persistance  du l'historique produit
            */ 
            $historiqueStock= new HistoriqueStock;
            $historiqueStock->setDateOperation($createdAt ?? '');
            $historiqueStock->setNomOperation($nomOperation ?? '');
            $historiqueStock->setProduit($refProduitAjouter);
            $historiqueStock->setQte($qte ?? '');
            $historiqueStock->setPrix($prix ?? '');
            $historiqueStock->setEnPromotion($promotion ?? '');
            $historiqueStock->setUnite($unite ?? '');
            $this->historiqueStock_db->addHistoriqueStock($historiqueStock);

            $this->view->redirect('Produit/liste/1');
        } 
        else 
        {
            $this->data['title'] = "Ajout d'un Produit ";
            $this->view->load('pages/produit/add', $this->data);
        }
    }

    // Modifier un produit.
    public function edit($reference)
    {
        $produit  = $this->produit_db->getProduit($reference);

        $this->data['unites'] = $this->produit_db->listeUnites();
        $this->data['activites'] = $this->produit_db->listeActivites();
        $this->data['composants'] = $this->composant_db->liste();

        if (isset($_POST['annuler'])) {
            $this->view->redirect('Produit/liste/1');
        }
        if (isset($_POST['modifier'])) {
            extract($_POST);
            if ($produit != null) {
                
                $produit->setNom($nom ?? '');
                $produit->setQte($qte ?? '');
                $produit->setPrix($prix ?? '');
                $produit->setEnPromotion($promotion ?? '');
                $produit->setUpdatedAt($updatedAt ?? '');
                $produit->setUpdatedAt($updatedAt ?? '');
                $produit->setUnite($this->produit_db->getUnite($unite) ?? '');
                // Modification des infos de la table produits_activites
                if (isset($activite)) {
                    $tabActivites = [];
                    foreach ($activite as $a) {
                        $tabActivites[] =  $this->produit_db->getActivite($a);  
                        $produit->setActivites($tabActivites);
                    } 
                }
                // Modification des infos de la table produits_composants
                if (isset($composant)) {
                    $tabComposants = [];
                    foreach ($composant as $c) {
                        $tabComposants[] =  $this->produit_db->getComposant($c);  
                        $produit->setComposants($tabComposants);
                    } 
                }
                $title = 'photo';
                if ($_FILES[$title]['name'] != '') {
                    $upload = new SamaneUpload;
                    $folder = 'public/images/personnes/produits';
                    $upload->load($title, $folder);
                    $produit->setPhoto($_FILES[$title]['name']);
                }
            
                if ($produit->getReference() == '' || $produit->getNom() == '' || $produit->getPhoto() == '')
                {
                    $this->data['vide'] = 1;
                    $this->data['produit'] = $produit;
                    $this->data['title'] = "Ajout d'un Produit";
                    $this->view->load('pages/produit/add', $this->data);
                } 

                $this->produit_db->updateProduit($produit);

                $this->view->redirect('Produit/liste/1');
            } else {
                $this->data['vide'] = 1;
                $this->data['title'] = "Modification d'un produit";
                $this->data['produit'] = $produit;
                
                $this->view->redirect('pages/produit/edit', $this->data);
            }
        } else {
            $this->data['title'] = "Modification d'un produit";
            $this->data['produit'] = $produit;
            $this->data["mesActivites"]  = $this->data['produit']->getActivites();
            $this->data["mesComposants"]  = $this->data['produit']->getComposants();
       
            $this->view->load('pages/produit/edit', $this->data);
        }
    }



    // Modifier le stock d'un produit spécifique.
    public function updateStock($reference)
    {
        $produit  = $this->produit_db->getProduit($reference);
       
        $this->data['unites'] = $this->produit_db->listeUnites();
        $this->data['activites'] = $this->produit_db->listeActivites();
        $this->data['composants'] = $this->composant_db->liste();

        if (isset($_POST['updateStock'])) {
            extract($_POST);
 
            if(intval($nbProduitVendus) > intval($produit->getQte()))
                {
                    $this->data['vide'] = 0;
                    $this->data['erreur1'] = "Le nombre de produits vendus ne pas être supérieur au stock actuel ! ";
                    $this->data['title'] = "Gestion de Stock Produit";
                    $this->data['produit'] = $produit;
                    return  $this->view->load('pages/produit/editStock', $this->data);
                }
                if($nbProduitVendus == 0)
                {
                    $this->data['vide'] = 0;
                    $this->data['erreur2'] = "La quantité saisie est invalide ! ";
                    $this->data['title'] = "Gestion de Stock Produit";
                    $this->data['produit'] = $produit;
                    return  $this->view->load('pages/produit/editStock', $this->data);
                }

            if ($produit != null) {
                $produit->setNom($nom ?? '');
                $produit->setQte(intval($qte) - intval($nbProduitVendus)  ?? '');
                $produit->setPrix($prix ?? '');
                $produit->setEnPromotion($promotion ?? '');
                $produit->setUpdatedAt($updatedAt ?? '');
                $produit->setUpdatedAt($updatedAt ?? '');
                $produit->setUnite($this->produit_db->getUnite($unite) ?? '');
                // Modification des infos de la table produits_activites
                if (isset($activite)) {
                    $tabActivites = [];
                    foreach ($activite as $a) {
                        $tabActivites[] =  $this->produit_db->getActivite($a);  
                        $produit->setActivites($tabActivites);
                    } 
                }
                // Modification des infos de la table produits_composants
                if (isset($composant)) {
                    $tabComposants = [];
                    foreach ($composant as $c) {
                        $tabComposants[] =  $this->produit_db->getComposant($c);  
                        $produit->setComposants($tabComposants);
                    } 
                }
                $title = 'photo';
                if ($_FILES[$title]['name'] != '') {
                    $upload = new SamaneUpload;
                    $folder = 'public/images/personnes/produits';
                    $upload->load($title, $folder);
                    $produit->setPhoto($_FILES[$title]['name']);
                }

                $pro =  $this->produit_db->updateProduit($produit);
                
                /**
                * Persistance  du l'historique produit
                */ 
                $historiqueStock= new HistoriqueStock;
                $historiqueStock->setDateOperation($updatedAt ?? '');
                $historiqueStock->setNomOperation($nomOperation ?? '');
                $historiqueStock->setProduit($pro ?? '');
                $historiqueStock->setQte(intval($qte) - intval($nbProduitVendus) ?? '');
                $historiqueStock->setPrix($prix ?? '');
                $historiqueStock->setEnPromotion($promotion ?? '');
                $historiqueStock->setUnite($unite ?? '');
                $this->historiqueStock_db->addHistoriqueStock($historiqueStock);

                $this->view->redirect('Produit/listeStock/1');
            } else {
                $this->data['titleProduit'] = "Gestion de Stock Produit";
                $this->data['produit'] = $produit;
                $this->data["mesActivites"]  = $this->data['produit']->getActivites();
                $this->data["composants"]  = $this->composant_db->liste();
                $this->data["mesComposants"]  = $this->data['produit']->getComposants();
                $this->view->load('pages/produit/editStock', $this->data);
            }
        } else {
            $this->data['titleProduit'] = "Gestion de Stock Produit";
            $this->data['produit'] = $produit;
            $this->data["mesActivites"]  = $this->data['produit']->getActivites();
            $this->data["composants"]  = $this->composant_db->liste();
            $this->data["mesComposants"]  = $this->data['produit']->getComposants();
            $this->view->load('pages/produit/editStock', $this->data);
        }
    }
 

    public function listeHistoriqueStocks($page = 1)
    {
        $nbEPage = 10;
        $this->data["nbHistoriqueStocks"] = $this->historiqueStock_db->nbHistoriqueStock();
        $this->data['nbPage'] = $nbPage = ceil($this->data['nbHistoriqueStocks'] / $nbEPage);
        $page = $page <= $nbPage ? $page : 1;
        $this->data['page'] = $page = (int) $page;
        $this->data['title'] = 'Historique de tous les Stocks';
        $this->data['historiqueStocks'] = $this->historiqueStock_db->listeHistoriqueStock($page - 1, $nbEPage);
        $this->view->load('pages/historique/historiqueStock/liste', $this->data);
    }

    public function histoProduit($reference)
    {
        $this->data["historiqueStocks"] = $this->historiqueStock_db->getProduitByReference($reference);
        $this->view->load('pages/historique/historiqueStock/liste', $this->data);
    }
 
    
    // Recherche un produit.
    public function search()
    {
        if (isset($_POST['search']) && $_POST['search'] != "") {
            $this->data['produits'] = $this->produit_db->getProduitByMotCle(ucfirst($_POST['search']));
        }
        $this->data['title'] = 'Liste des Produits';
        
        $this->view->load('pages/produit/liste', $this->data);
    }

    public function searchProduitAVendre()
    {
        if (isset($_POST['search']) && $_POST['search'] != "") {
            $this->data['produits'] = $this->produit_db->getProduitByMotCle(ucfirst($_POST['search']));
        }
        $this->data['title'] = 'Liste des Produits';
        $this->data['nbProduits'] = $this->produit_db->nbProduit();
        $this->data['stockActuel'] = $this->produit_db->stockActuel();
        $this->data['revenus'] = $this->produit_db->revenu();
        $this->data['nbProduitsPerime'] = $this->produit_db->nbProduitPerime();

        
        $this->view->load('pages/produit/vente', $this->data);
    }
}